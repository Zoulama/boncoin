<?php
/**
 * Created by PhpStorm.
 * User: zoulamambour
 * Date: 2019-01-18
 * Time: 21:06
 */

namespace Core\Model;

use Core\Database\DatabaseAbstract;
use Core\Collection\Collection;
use Core\Traits\Main;
use Core\Traits\Variables;
use Core\Operations\Main as Operation;

/**
 * Model parent
 */
class BaseModel extends DatabaseAbstract
{

    use Variables;
    use Main;
    use Operation;

    protected function __construct()
    {
        parent::__construct();

    }

    /**
     * DB::connect()
     * return instance
     * @return object
     */
    public static function connect()
    {
        // refuser la connexion en double
        // check if $_instance is null or not
        // vérifier si $ _instance est null ou non
        // sinon retourne l'objet de connexion en cours
        if(!isset(self::$_instance) || self::$_instance == null) {
            self::$_instance = new  BaseModel();
        }
        return self::$_instance;
    }

    protected function collection($collection)
    {
        return new Collection($collection, self::$_instance);
    }
    protected function getCollection($table)
    {
        if(isset($this->__cach[md5($table)]))
        {
            return true;
        }
        return false;
    }

}
