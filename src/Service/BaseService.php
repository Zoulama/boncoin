<?php
/**
 * Created by PhpStorm.
 * User: zoulamambour
 * Date: 2019-01-21
 * Time: 20:12
 */

namespace Zlm\Service;


abstract class BaseService
{
    public function toUp(string $name){
        return trim(strtoupper($name));
    }

    public function toLow(string $name){
        return trim(strtolower($name));
    }

    public function email(string &$email) :string {
        $data = filter_var($email, FILTER_SANITIZE_EMAIL);

        if (filter_var($data, FILTER_VALIDATE_EMAIL))
            return $email;

        return '';
    }

    public static function address (string $data) : string
    {
        return preg_replace("~[0-9]~", "*", $data);
    }

    public function sanitize(string $name) : string {
        return htmlspecialchars(strip_tags($name));
    }

}