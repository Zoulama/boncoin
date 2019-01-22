<?php
/**
 * Created by PhpStorm.
 * User: zoulamambour
 * Date: 2019-01-18
 * Time: 21:12
 */

namespace Core\Traits;
use Core\Collection\Collection;

trait Query
{
	/**
	 * vérifier si l'instruction SQL est préparée
	 * fetch results
	 * @param string $sql
	 * @param array $params
	 * @return mixed
	 */
	public function query($sql, $params = [])
	{

		 //var_dump($sql);die();
		$this->_query = "";
		$this->_where = "WHERE";
		$this->_error = false;
        //var_dump($sql);die('k');
		$query = $this->_pdo->prepare($sql);
		if(count($params)) {
			$x = 1;
			foreach($params as $param) {
				$query->bindValue($x, $param);

				$x++;
			}
		}

        //vérifier si l'instruction SQL est exécutée
		if($query->execute())
		{
			try
			{
				$this->_results = $query->fetchAll(\config('fetch'));
			}
			catch (\PDOException $e) {}

			$this->_sql = $query;
			$this->_count = $query->rowCount();

		}
		else
			$this->_error = true;


		return $this;
	}

	/**
	 * select from database
	 * @param  array  $fields les champs que nous devons sélectionner
	 * @return Collection résultat de la sélection en tant qu'objet Collection
	 */
	public function select($fields = ['*'], $last = false)
	{
		if($fields === true)
		{
			$fields = ['*'];
			$last = true;
		}
		if($fields != ['*'] && !is_null($this->_idColumn))
		{
			if(!in_array($this->_idColumn, $fields))
			{
				$fields[$this->_idColumn];
			}
		}

		if(!$last)
			$sql = "SELECT " . implode(', ', $fields)
				. " FROM {$this->_table} {$this->_query}";
		else
		{
			//$this->_query .= ($this->_ordering == false ? " ORDER BY {$this->_idColumn} DESC" : '');
			$sql = "SELECT * FROM (
                        SELECT " . implode(', ', $fields) . "  
                        FROM {$this->_table}
                        
                         {$this->_query}  
                        ) sub  ORDER by id ASC";
		}


		$this->_query = $sql;
		$this->_ordering = false;

		return $this->collection([
			'results' => $this->query($sql)->results(),
			'table'   => $this->_table,
			'id'      => $this->_idColumn
		]);
	}

	/**
	 * Recherche une seule ligne de la table via l'id
	 * @param  int $id [description]
	 * @return Collection ou objet (au choix du fichier de configuration) résultats ou vide
	 */
	public function find($id)
	{
		return $this->where($this->_idColumn, $id)
			->first();
	}

	/**
	 * Obtenir le premier enregistrement uniquement
	 */
	public function first()
	{
		$results = $this->select()->results();

		if(count((array)$results))
		{
			return $this->collection([
				'results' => $results[0],
				'table'   => $this->_table,
				'id'      => $this->_idColumn
			]);
		}

		return $this->collection([
			'results' => [],
			'table'   => $this->_table,
			'id'      => $this->_idColumn
		]);
	}


	public function findBy()
	{
        // TO DO
	}
}