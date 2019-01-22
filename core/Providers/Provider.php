<?php

/**
 * Created by PhpStorm.
 * User: zoulamambour
 * Date: 2019-01-18
 * Time: 21:16
 */
namespace Core\Providers;

trait Provider
{
	/**
	 * Connexion de la base de donnee
	 * @param $null
	 */
	protected function mysql($null)
	{
		try
		{
			$this->_pdo = new \PDO("mysql:host=" . \config('host_name') . ";dbname=" .
				config('db_name'), \config('db_user'), \config('db_password'));
			$this->_pdo->exec("set names " . 'utf8');
			$this->_pdo->setAttribute( \PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION );
		} catch(\PDOException $e) {
			die($e->getMessage());
		}
	}
}