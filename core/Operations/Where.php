<?php

/**
 * Created by PhpStorm.
 * User: zoulamambour
 * Date: 2019-01-18
 * Time: 20:13
 */

namespace Core\Operations;

trait Where
{
	/**
	 * ajouter où condition à l'instruction SQL
	 * @param  string  $field    field name from table
	 * @param  string  $operator operator (= , <>, .. etc)
	 * @param  mix $value    the value
	 * @return object        this class
	 */
	public function where($field, $operator, $value = false)
	{
		/**
		 * i $ value n'est pas défini, définissez $operator sur (=) and
		 * $value to $operator
		 */
		if($value === false)
		{
			$value = $operator;
			$operator = "=";
		}

		if(!is_numeric($value))
			$value = "'$value'";

		$this->_query .= " $this->_where $field $operator $value";
		$this->_where = "AND";
		return $this;
	}

	/**
	 * between condition
	 */
	public function whereBetween()
	{
		// TO DO
	}




	/**
	 * Ajour de la condition  OR
	 *
	 */
	public function orWhere()
	{
        // TO DO
	}

	/**
	 * Ajout de la condition in
	 */
	public function in()
	{
        // TO DO
	}

	/**
	 * Ajout de la condition not in
	 */
	public function notIn()
	{
        // TO DO
	}
}