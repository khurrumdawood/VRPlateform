<?php

namespace AppBundle\Shared\DTO;

class CredentialDTO extends BaseDTO {

    public function __construct() {
        
    }
    public $username;
    public $password;
    
     public function getSelf() {
        return static::class;
    }

}
