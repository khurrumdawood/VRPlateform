<?php

namespace AppBundle\Shared\Mapper;

use AppBundle\Document\User;
use AppBundle\Shared\DTO\CredentialDTO;

class UserMapper {

    public function __construct() {
        
    }
    function Map(CredentialDTO $dto, User $entity) {
//        $entity->username = $dto->username;
//        $entity->password = $dto->password;
        $entity->setUsername($dto->username);
        $entity->setPassword($dto->password);
        
        return $entity;
    }

}
