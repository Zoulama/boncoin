<?php
/**
 * Created by PhpStorm.
 * User: zoulamambour
 * Date: 2019-01-18
 * Time: 17:23
 */

namespace App\Models;

use Core\Model\BaseModel;

/**
 * Model parent
 */
 class Model extends BaseModel
{
     /**
      * @var $db_connect
      */
    private $db_connect;

    public function __construct()
    {
        parent::__construct();
        $this->db_connect = BaseModel::connect();
    }

    public function getDbConnect(){
        return $this->db_connect;
    }

}
