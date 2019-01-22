<?php
/**
 * Created by PhpStorm.
 * User: zoulamambour
 * Date: 2019-01-21
 * Time: 19:49
 */

namespace Zlm\Service;

use stdClass;
use Zlm\Entity\Contact as ContactEntity;
use App\Models\Contact as ContactModel;


class ContactService extends BaseService implements ContactServiceInterface
{
    /**
     * @var ContactModel $contactModel
     */
    public $contactModel;

    public function __construct()
    {
        $this->contactModel = new ContactModel();
    }
    public function getContact(int $id):stdClass{
        return $this->contactModel->find($id);
    }

    public function CreateContact(ContactEntity $entity) : bool {


        if ($this->email($entity->getEmail()) !=''){
            $email = $this->toLow($this->email($entity->getEmail()));
        }

        if (!isset($email))
            return false;

        $lastname   = $this->sanitize($entity->getLastName());
        $firstname  = $this->sanitize($entity->getFirstName());;
        $user_id    = $this->sanitize($entity->getUserId());

        $contact = $this->contactModel
            ->table('contacts')
            ->insert([
                'lastname'  => ucfirst($lastname),
                'firstname' => ucfirst($firstname),
                'email'     => $email,
                'user_id'   => $user_id
            ]);

        if ($contact)
            return true;
        else
            return false;

    }

//    public function updateContact(int $id):stdClass{
//
//    }
}