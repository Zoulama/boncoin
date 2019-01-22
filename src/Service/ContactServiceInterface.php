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

interface ContactServiceInterface
{
    public function getContact(int $id):stdClass;
    public function CreateContact(ContactEntity $entity) : bool ;
    //public function updateContact(int $id):stdClass;
}