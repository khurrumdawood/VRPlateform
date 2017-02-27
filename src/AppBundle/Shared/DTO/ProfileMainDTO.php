<?php

namespace AppBundle\Shared\DTO;

use  AppBundle\Shared\DTO\BaseDTO;

class ProfileMainDTO extends BaseDTO {

    public function __construct() {
        
    }

    public $firstName;
    public $lastName;

    

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    public function getLastName() {
        return $this->lastName;
    }

}
