<?php
/**
 * Created by PhpStorm.
 * User: zoulamambour
 * Date: 2019-01-18
 * Time: 19:12
 */

namespace App\Models;


class User extends Model
{

    public function __construct()
    {
        parent::__construct();

    }

    public function allUser(){

        return $this->getDbConnect()->table('users')->select()->results();
    }

    public function find($id)
    {
        return $this->getDbConnect()->table('users')->find($id)->results();
    }
    public function getUserByEmail(string $email){
        return $this->getDbConnect()->table('users')
            ->where('email','=',$email)->first()->results();
    }

}