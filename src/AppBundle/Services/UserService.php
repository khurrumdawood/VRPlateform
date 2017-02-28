<?php

namespace AppBundle\Services;

use AppBundle\Shared\Mapper\UserMapper;
//Helper Classes
use AppBundle\Helper\MapperHelper;
//Document Classes
use AppBundle\Document\User;
use AppBundle\Document\Profile;
use AppBundle\Document\Product;
use AppBundle\Document\Address;
use AppBundle\Document\Contact;
use AppBundle\Shared\DTO\ProfileMainDTO;
use AppBundle\Core\Concreate\DocProvider;
use AppBundle\Services\BaseService;
use Doctrine\ODM\MongoDB\DocumentManager;
use AppBundle\Shared\DTO\ProductDTO;

//use Papper\Papper;
//use Papper\MemberOption\Ignore;

require_once __DIR__ . '/../../../vendor/autoload.php';

class UserService {

    private $provider;

    public function setManager(DocumentManager $manager) {

        $this->provider = DocProvider::init($manager);
    }

    public function getAllUsers() {
        echo "user service";
        $users = $this->provider->Users()->findAll();

        exit;
        //return MapperHelper::getMapper()->getDTOs($users); // tomorrow first priority.      
    }

    public function getProfileById($id) {
        $profile = $this->provider->Profiles()->find($id);
        return $profile->toDTO(new ProfileMainDTO());
    }

    public function search(ProfileFilterDTO $dto) {
        //$users = $this->documentManager->getRepository('AppBundle:User')->findAll();
        //return MapperHelper::getMapper()->getDTOs($users); // tomorrow first priority.      
    }

    public function updateCredential(CredentialDTO $dto) {
        $user = $this->manager->Users()->find($dto->id);
        $this->manager->flush(MapperHelper::getMapper()->dtoToDoc($dto, $user));
    }

    public function createProfile() {




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

        $this->manager->persist($profile);
        $this->manager->flush($profile);
        echo "profile crated. ";
        exit;
    }

    public function papperTest() {

//        $product = new Product();
//        $product->setName("proudct name");
//        $product->setFirstname("firstname");
//        $product->setLastname("");
//        $product->setPrice("123");
//        $product = $this->provider->Product()->find('58aef52f29c39f1413000029');
////        $product->setName("proudct name");
//        Papper::createMap('AppBundle\Document\Profile', 'AppBundle\Shared\DTO\ProductDTO');
//
//        $userDTO = Papper::map($product)->toType('AppBundle\Shared\DTO\ProductDTO');
//        print_r($userDTO);
//        exit;
    }

    public function autopapperTest($mapper) {

//        $product = new Product();
//        $product->setName("proudct name");
//        $product->setFirstname("firstname");
//        $product->setLastname("");
//        $product->setPrice("123");
        //$mapper = new mapper();
        //$product = $this->provider->Product()->find('58aef52f29c39f1413000029');
//        $product->setName("proudct name");
// get mapper
        // $mapper = $this->container->get('bcc_auto_mapper.mapper');
// create default map
        $mapper->createMap('AppBundle\Document\Profile', 'AppBundle\Shared\DTO\ProductDTO');

// create objects
        $source = new Product();
        $source->firstname = 'Symfony2 developer';
        $destination = new ProductDTO();

// map
        $mapper->map($source, $destination);

        echo $destination->description; // outputs 'Symfony2 developer'

        exit;
    }

}
