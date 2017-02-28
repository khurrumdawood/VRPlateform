<?php

namespace AppBundle\Shared\DTO;

class ProfileMainDTO extends BaseDTO {

    public function __construct() {
        
    }

    public $firstName;
    public $lastName;

//    public function getSelf() {
//        return static::class;
//    }
//
//    public function toDoc($doc) {
//        return MapperHelper::getMapper()->dtoToDoc($doc, $dto);
//    }
//
//    public function setFirstName($firstName) {
//        $this->firstName = $firstName;
//    }
//
//    public function getFirstName() {
//        return $this->firstName;
//    }
//
//    public function setLastName($lastName) {
//        $this->lastName = $lastName;
//    }
//
//    public function getLastName() {
//        return $this->lastName;
//    }

}
