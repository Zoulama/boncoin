<?php
/**
 * Created by PhpStorm.
 * User: zoulamambour
 * Date: 2019-01-18
 * Time: 20:35
 */

namespace Zlm\Repository;

use App\Models\Contact;
use Zlm\Entity\Contact as ContactEntity;

use stdClass;


Interface ContactInterface
{
    public function getContact(int $id):stdClass;
    public function CreateContact(array $data) : stdClass ;
    public function updateContact(int $id):stdClass;

}