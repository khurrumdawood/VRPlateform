<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Document\User;
use AppBundle\Shared\DTO\CredentialDTO;
use AppBundle\Shared\DTO\BaseDTO;
use AppBundle\Helper\MapperHelper;

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

}
