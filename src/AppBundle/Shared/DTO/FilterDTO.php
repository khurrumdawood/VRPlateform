<?php

namespace AppBundle\Shared\DTO;

class ProfileFilterDTO extends BaseDTO {

    public function __construct() {
        
    }
    public $first;
    public $last;
    public $gender;
    public $email;
    public $contact;
    public $address;   
}
