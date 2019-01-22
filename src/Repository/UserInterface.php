<?php
/**
 * Created by PhpStorm.
 * User: zoulamambour
 * Date: 2019-01-18
 * Time: 20:35
 */

namespace Zlm\Repository;
use App\Models\User as UserModel;
use App\Models\Contact;

use stdClass;

interface UserInterface
{
    public function getUser(int $id):stdClass;
    public function getUserByEmail(string $email) : stdClass ;
}
