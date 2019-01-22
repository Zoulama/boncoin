<?php
/**
 * Created by PhpStorm.
 * User: zoulamambour
 * Date: 2019-01-18
 * Time: 22:10
 */

namespace Core\Operations;

trait Main
{
	use Where;


	/**
	 * obtenir le nombre de lignes pour la dernière requête sélectionnée
	 * @return int
	 */
	public function count()
	{
		$results = (array)$this->results();
		return isset($results[0]) ? count($this->_results) : 1;
	}
}
