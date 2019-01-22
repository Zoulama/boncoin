<?php
/**
 * Created by PhpStorm.
 * User: zoulamambour
 * Date: 2019-01-18
 * Time: 20:36
 */

namespace Zlm\Repository;

use App\Models\Address;

interface AddressInterface
{
    public function getAddress(int $id):Address;
    public function CreateAddress(int $id) : Address ;
    public function updateAddress(int $id):Address;
}