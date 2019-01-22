<?php
/**
 * Created by PhpStorm.
 * User: zoulamambour
 * Date: 2019-01-21
 * Time: 14:06
 */

namespace Zlm\Service;

use App\Models\User as UserModel;
use Zlm\Repository\User as UserRepository;
use stdClass;

class UserService extends BaseService implements UserServiceInterface
{
    /**
     * @var UserRepository $userRepository
     */
    public $userRepository;

    public function __construct()
    {
        $this->userRepository = new UserRepository();
    }

    public function getUser(int $id):stdClass{
        return $this->userRepository->getUser($id);
    }

    public function getUserByEmail(string $email) : stdClass {
        return $this->userRepository->getUserByEmail($email);
    }

}