<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Document\User;
use AppBundle\Shared\DTO\CredentialDTO;
use AppBundle\Shared\DTO\ProfileMainDTO;
use AppBundle\Shared\DTO\BaseDTO;
use AppBundle\Shared\DTO\ProductDTO;
use AppBundle\Helper\MapperHelper;
use AppBundle\Document\Product;
use AppBundle\Document\Profile;

class ApiController extends Controller {

    /**
     * @Route("/getAllUsers")
     */
    public function getAllUsersAction() {

        $service = $this->container->get('app_users');
        echo $service->getAllUsers();
        exit;
    }

    /**
     * @Route("/getAllProfiles")
     */
    public function getAllProfilesAction() {

        $service = $this->container->get('app_users');
        $dtos = $service->getAllProfiles();
        print_r($dtos);
        exit;
    }

    /**
     * @Route("/update")
     */
    public function updateAction(Request $request) {
        $dto = MapperHelper::getMapper()->jsonToDTO($request->get('credentialDTO'), new CredentialDTO());

        $service = $this->container->get('app_users');
        $service->updateCredential($dto);
        echo "success";
        exit;
    }

    /**
     * @Route("/makeprofile")
     */
    public function makeprofileAction(Request $request) {
        $service = $this->container->get('app_users');
        $dto = $service->createProfile();
    }

    /**
     * @Route("/getProfileById")
     */
    public function getProfileById(Request $request) {
        $id = $request->get('id');
        $service = $this->container->get('app_users');
        $dto = $service->getProfileById($id);

        print_r($dto);
        exit;
    }

    /**
     * @Route("/papper")
     */
    public function papperAction(Request $request) {

        $service = $this->container->get('app_users');
        $dto = $service->papperTest();

        print_r($dto);
        exit;
    }

    /**
     * @Route("/automapper")
     */
    public function automapperAction(Request $request) {

        //$service = $this->container->get('app_users');
        $mapper = $this->container->get('bcc_auto_mapper.mapper');
        $mapper->createMap('AppBundle\Document\Product', 'AppBundle\Shared\DTO\ProductDTO');

        $source = new Product();
        $source->setFirstname('Symfony2 developer');

        $destination = new ProductDTO();

        $mapper->map($source, $destination);

        echo $destination->getFirstName(); // outputs 'Symfony2 developer'

        exit;

        // print_r($dto);
        exit;
    }

    /**
     * @Route("/profilemapper")
     */
    public function profilemapperAction() {

        //$service = $this->container->get('app_users');
        $mapper = $this->container->get('bcc_auto_mapper.mapper');
        $mapper->createMap('AppBundle\Document\Profile', 'AppBundle\Shared\DTO\ProfileMainDTO');

        $source = new Profile();
        $source->firstName = 'first name';
        $source->lastName = 'last name';
        $destination = new ProfileMainDTO();
        $mapper->map($source, $destination);
        echo $destination->firstName; // outputs 'Symfony2 developer'
        // print_r($dto);
        exit;
    }

    /**
     * @Route("/getProfileById")
     */
    public function getProfileByIdAction(Request $request) {
        $service = $this->container->get('app_users');
        print_r($service->getProfileById($request->get('id')));
        exit;
    }

    /**
     * @Route("/setProfileBy")
     */
    public function setProfileByAction(Request $request) {
        $dto = new ProfileMainDTO();
        $dto = MapperHelper::getMapper()->jsonToDTO($request->get('profile'), $dto);
        $service = $this->container->get('app_users');
        print_r($service->setProfileBy($dto));
        exit;
    }

}
