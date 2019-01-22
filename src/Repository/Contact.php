<?php
/**
 * Created by PhpStorm.
 * User: zoulamambour
 * Date: 2019-01-18
 * Time: 20:36
 */

namespace Zlm\Repository;

use App\Models\Contact as ContactModel;
use Zlm\Entity\Contact as ContactEntity;
use stdClass;

class Contact implements ContactInterface
{
    /**
     * @var ContactModel $userModel
     */
    public $contactModel;

    public function __construct()
    {
        $this->contactModel = new ContactModel;
    }

    public function getContact(int $id):stdClass{
        return $this->contactModel->find($id);
    }

    public function CreateContact(array $data) : stdClass{

        $this->contactModel
            ->table('contacts')
            ->insert([
                'lastname'  => $data['lastname'],
                'firstname' => $data['firstname'],
                'email'     => $data['email'],
                'user_id'   => $data['user_id']
            ]);

        //$this->contactModel->insert();


    }

    public function updateContact(int $id):stdClass{

    }
}