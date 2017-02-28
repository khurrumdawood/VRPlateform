<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\View\View;
use AppBundle\Document\User;






class UserController extends FOSRestController {

    /**
     * @Rest\Get("/user")
     */
    public function getAction() {
      
        $dm = $this->getDoctrine('doctrine_mongodb')->getManager();
        $restresult = $dm->getRepository('AppBundle:User')->findAll();
        
        
        print_r($restresult);
        exit; 
        
        if ($restresult === null) {
            return new View("there are no users exist", Response::HTTP_NOT_FOUND);
        }
        return $restresult;
    }

}
