<?php

namespace AppBundle\Services;
use Doctrine\ODM\MongoDB\DocumentManager;

use AppBundle\Shared\GlobalObjects;
use AppBundle\Document\User;
use AppBundle\Document\Profile;
use AppBundle\Document\Address;
use AppBundle\Document\Contact;

class MongoService {

    private $manager;
    public function __construct(DocumentManager $documentManager) {
        $this->manager = $documentManager;
    }
    public function Profiles() {
        return $this->manager->getRepository(GlobalObjects::$PROFILE_REPO);
    }
    public function Users() {
        return $this->manager->getRepository(GlobalObjects::$USER_REPO);
    }
    public function getUserDTO() {
        return $this->manager->getRepository(GlobalObjects::$USER_REPO);
    }
    public function flush($doc) {
        return $this->manager->flush($doc);
    }
     public function prepare($doc) {
        return $this->manager->persist($doc);;
    }
        
    
}
