<?php
/**
 * Created by PhpStorm.
 * User: zoulamambour
 * Date: 2019-01-21
 * Time: 15:20
 */

namespace App\Controllers;

use Zlm\Service\UserService;
use Core\Http\Request;
use Core\Http\Input;
use Zlm\Entity\Contact as ContactEntity;

class UserController extends Controller
{
    /**
     * @var UserService $userService
     */
    public $userService;

    /**
     * @var ContactEntity $contactEntity
     */
    public $contactEntity;

    public function __construct()
    {
        parent::__construct();
        $this->userService = new  UserService();
        $this->contactEntity = new ContactEntity();
    }

    /**
     * Login et Liste de contact
     */

    public function postLogin() {
      //var_dump(Input::post('password'));die();
       if (Request::getMethod() != "POST") {
           header('Location: home/home');
           exit();
       }

       if (!Input::hasPost('email') && !Input::hasPost('password')) {
           header('Location: home/home');
           exit();
       }


        $email = $input = Input::post('email');

        $user = $this->userService->getUserByEmail($email);

        if (!is_null($user)) {
            if (password_verify(Input::post('password'), $user->password ) ) {
                session_start();
                $_SESSION['user_id'] = $user->id;
                header('Location: home/liste');
                exit();
            }
        }

        header('Location: home/home');
        exit();

    }

}