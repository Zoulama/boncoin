<?php
/**
 * Created by PhpStorm.
 * User: zoulamambour
 * Date: 2019-01-18
 * Time: 19:13
 */

namespace App\Models;


class Contact extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function find($id)
    {
        return $this->getDbConnect()->table('contacts')->find($id)->results();
    }

    public function getUserContacts(int $id){
        return $this->getDbConnect()->table('contacts')
            ->where('user_id', '=', $id);
    }

}