<?php
/**
 * Created by PhpStorm.
 * User: zoulamambour
 * Date: 2019-01-18
 * Time: 19:45
 */

namespace Zlm\Entity;


Interface UserInterface
{
    /**
     * @return string
     */
    public function getLogin() :string;

    /**
     * @param string $email
     */
    public function setLogin(string $email);
}