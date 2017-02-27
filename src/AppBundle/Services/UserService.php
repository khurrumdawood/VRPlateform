<?php

namespace AppBundle\Services;
use Doctrine\ODM\MongoDB\DocumentManager;

use AppBundle\Core\DocProvider;
use AppBundle\Shared\Mapper\UserMapper;
use AppBundle\Shared\DTO\CredentialDTO;
use AppBundle\Shared\DTO\ProfileMainDTO;
use AppBundle\Helper\MapperHelper;
use AppBundle\Document\User;
use AppBundle\Document\Profile;
use AppBundle\Document\Address;
use AppBundle\Document\Contact;
use AppBundle\Services\MongoService;

class UserService {

    private $repoProvider;
    public function __construct(MongoService $mongoService) {
        $this->repoProvider = $mongoService;
    }
    public function getAllUsers() {
       $users =  $this->repoProvider->Users()->findAll();
       return MapperHelper::getMapper()->getDTOs($users); // tomorrow first priority. 
    
    }
    public function getAllProfiles() {
      $profiles =  $this->repoProvider->Profiles()->findAll();
      return MapperHelper::getMapper()->getDTOs($profiles); // tomorrow first priority. 
      exit;
    }
    public function getProfileById($id) {
      $profile =  $this->repoProvider->Profiles()->find($id);
      $dto=new ProfileMainDTO();
      return $profile->toDTO($dto); // tomorrow first priority. 
      
    }
    public function setProfileBy($dto) {
      $profile =  $this->repoProvider->Profiles()->find($dto->id);
      return $this->repoProvider->flush($dto->toDoc( $profile));
    }
    public function search(ProfileFilterDTO $dto) {
        //$users = $this->documentManager->getRepository('AppBundle:User')->findAll();
        //return MapperHelper::getMapper()->getDTOs($users); // tomorrow first priority.      
    }
    public function updateCredential(CredentialDTO $dto) {
        $user = $this->repoProvider->Users()->find($dto->id);
        $this->repoProvider->flush(MapperHelper::getMapper()->dtoToDoc($dto, $user));
    }
    
    public function createProfile(){
        
        
        
//        
//        $address = new Address();
//
//        $address->setCity('lahore');
//        $address->setCountry("pakistan");
//        $address->setStreet('DHA');
//        $address->setZipcode('123456789');
//        
//
//        $contact = new Contact();
//        $contact->setIsDefault(1);
//        $contact->setPhoneNumber('3333333333');
//        
//        $profile = new Profile();
//        $profile->setFirstName('firstname');
//        $profile->setLastName('lastname');
//        $profile->addAddress($address);
//        $profile->addContact($contact);
//        
//        $this->provider->persist($profile);
//        $this->provider->flush($profile);
//        echo "profile crated. ";
//        exit; 
    }

}
