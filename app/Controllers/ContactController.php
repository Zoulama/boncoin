<?php
/**
 * Created by PhpStorm.
 * User: zoulamambour
 * Date: 2019-01-21
 * Time: 15:16
 */

namespace App\Controllers;

use Core\Http\Request;
use Core\Http\Input;
use Zlm\Entity\Contact as ContactEntity;
use Zlm\Service\ContactService;

class ContactController extends Controller
{
    /**
     * @var ContactService $contactService
     */
    public $contactService;

    /**
     * @var ContactEntity $contactEntity
     */
    public $contactEntity;

    public function __construct()
    {
        parent::__construct();
        $this->contactService = new  ContactService();
    }

    /**
     * formulaire de creation de contact
     */
    public function create(){
        session_start();
        if ( isset( $_SESSION['user_id'] ) ) {
            header('Location: home/create');
            exit();
        } else {
            header('Location: home/home');
            exit();
        }
    }

    public function save(){

        if (Request::getMethod() != "POST"){
            header('Location: home/home');
            exit();
        }

        $contactEntity = new ContactEntity();

        $contactEntity->setLastName(Input::post('lastname'));
        $contactEntity->setFirstName(Input::post('firstname'));
        $contactEntity->setEmail(Input::post('email'));
        $contactEntity->setUserId(Input::post('user_id'));
        //var_dump($contactEntity);die();

        $createContact = $this->contactService->CreateContact($contactEntity);

        header('Location: home/liste');
        exit();
    }
}