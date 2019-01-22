<?php
/**
 * Created by PhpStorm.
 * User: zoulamambour
 * Date: 2019-01-18
 * Time: 19:47
 */

namespace Zlm\Entity;


interface AddressInterface
{
    /**
     * @return string
     */
    public function getAddress() :string;

    /**
     * @param string $address
     */
    public function setAddress(string $address);

    /**
     * @return string
     */
    public function getCity() :string;

    /**
     * @param string $city
     */
    public function setCity(string $city);

    /**
     * @return string
     */
    public function getZipCode() :string;

    /**
     * @param string $zipCode
     */
    public function setZipCode(string $zipCode);

}