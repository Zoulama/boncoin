<?php
/**
 * Created by PhpStorm.
 * User: zoulamambour
 * Date: 2019-01-18
 * Time: 19:46
 */

namespace Zlm\Entity;


interface ContactInterface
{
        /**
         * @return string
         */
        public function getLastName() :string;

        /**
         * @param string $lastName
         */
        public function setLastName(string $lastName);

        /**
         * @return string
         */
        public function getFirstName(): string;

        /**
         * @param string $firstName
         */
        public function setFirstName(string $firstName);

        /**
         * @return string
         */
        public function getEmail(): string;

        /**
         * @param string $email
         */
        public function setEmail(string $email);

        /**
         * @return int
         */
        public function getUserId(): int;

        /**
         * @param int $user_id
         */
        public function setUserId(string $user_id);
}