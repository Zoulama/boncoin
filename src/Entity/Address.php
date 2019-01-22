<?php
/**
 * Created by PhpStorm.
 * User: zoulamambour
 * Date: 2019-01-18
 * Time: 19:47
 */

namespace Zlm\Entity;


class Address implements AddressInterface
{
    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $zipCode;

    /**
     * @return string
     */
    public function getAddress() :string{
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress(string $address){
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getCity() :string{
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity(string $city){
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getZipCode() :string{
        return $this->zipCode;
    }

    /**
     * @param string $zipCode
     */
    public function setZipCode(string $zipCode){
        $this->zipCode = $zipCode;
    }
}