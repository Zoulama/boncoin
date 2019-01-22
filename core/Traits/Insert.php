<?php
/**
 * Created by PhpStorm.
 * User: zoulamambour
 * Date: 2019-01-18
 * Time: 21:12
 */

namespace Core\Traits;

trait Insert
{
	/**
	 *
	 * insert into database tables
	 * @param string $table
	 * @param array $values
	 * @return mixed
	 */
	public function insert($values = [])
	{
		// vérifier la variable $valeurs est définie
		if(count($values)) {
			$fields = array_keys($values);
			$value = '';
			$x = 1;
			foreach($values as $field) {
				// add new value
				$value .="?";

				if($x < count($values)) {
					// add comma between values
					$value .= ", ";
				}
				$x++;
			}
			// generate sql statement
			$sql = "INSERT INTO {$this->_table} (`" . implode('`,`', $fields) ."`)";
			$sql .= " VALUES({$value})";
			// check if query is not have an error
			if(!$this->query($sql, $values)->error()) {
				return $this;
			}
		}

		return false;
	}

	/**
	 * get last inserted ID
	 * @return int
	 */
	public function lastInsertedId():int
	{
        // TO DO
	}

	/**
	 * insert or update
	 */
	public function createOrUpdate()
	{
        // TO DO
	}
}