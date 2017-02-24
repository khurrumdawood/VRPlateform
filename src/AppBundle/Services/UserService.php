<?php

namespace AppBundle\Services;

use Doctrine\ODM\MongoDB\DocumentManager;
use AppBundle\Shared\Mapper\UserMapper;
use AppBundle\Shared\DTO\CredentialDTO;
use AppBundle\Helper\MapperHelper;
use AppBundle\Document\User;
use AppBundle\Document\Profile;
use AppBundle\Document\Address;
use AppBundle\Document\Contact;

class UserService {

    private $documentManager;

    public function setDocumentManager(DocumentManager $documentManager) {
        $this->documentManager = $documentManager;
    }

    public function getAllUsers() {
        $users = $this->documentManager->getRepository('AppBundle:User')->findAll();
        return MapperHelper::getMapper()->getDTOs($users); // tomorrow first priority.      
    }
    public function search(ProfileFilterDTO $dto) {
        //$users = $this->documentManager->getRepository('AppBundle:User')->findAll();
        //return MapperHelper::getMapper()->getDTOs($users); // tomorrow first priority.      
    }
    public function updateCredential(CredentialDTO $dto) {
        $user = $this->documentManager->getRepository('AppBundle:User')->find($dto->id);
        $this->documentManager->flush(MapperHelper::getMapper()->dtoToDoc($dto, $user));
    }
    
    public function createProfile(){
        
        
        
        
        $address = new Address();

        $address->setCity('lahore');
        $address->setCountry("pakistan");
        $address->setStreet('DHA');
        $address->setZipcode('123456789');
        

        $contact = new Contact();
        $contact->setIsDefault(1);
        $contact->setPhoneNumber('3333333333');
        
        $profile = new Profile();
        $profile->setFirstName('firstname');
        $profile->setLastName('lastname');
        $profile->addAddress($address);
        $profile->addContact($contact);
        
        $this->documentManager->persist($profile);
        $this->documentManager->flush($profile);
        echo "profile crated. ";
        exit; 
    }

}
