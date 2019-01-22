<?php
/**
 * Created by PhpStorm.
 * User: zoulamambour
 * Date: 2019-01-18
 * Time: 19:46
 */

namespace Zlm\Entity;


class User implements UserInterface
{

    /**
     * @var string
     */
    private $email;

    /**
     * @return string
     */
    public function getLogin() :string {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setLogin(string $email) {
         $this->email = $email;
    }
}