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

class User implements UserInterface
{
    /**
     * @var UserModel $userModel
     */
    public $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel;
    }
    public function getUser(int $id):stdClass{
        return $this->userModel->find($id);
    }

    public function getUserByEmail(string $email) :stdClass {
        return $this->userModel->getUserByEmail($email);
    }


}