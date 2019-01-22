<?php
/**
 * Created by PhpStorm.
 * User: zoulamambour
 * Date: 2019-01-21
 * Time: 14:06
 */

namespace Zlm\Service;

use stdClass;

interface UserServiceInterface
{
    public function getUser(int $id):stdClass;
    public function getUserByEmail(string $email) : stdClass ;
}