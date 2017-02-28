<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Document\Product;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Document\Profile;
use AppBundle\Document\Contact;
use AppBundle\Document\Address;

class DefaultController extends Controller {

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request) {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
                    'base_dir' => realpath($this->container->getParameter('kernel.root_dir') . '/..') . DIRECTORY_SEPARATOR,
        ));
    }

    /**
     * @Route("/create")
     */
    public function createAction() {
        $product = new Product();
        $product->setName('A Foo Bar');
        $product->setPrice('19.99');
        $product->setLastname('test lastname ');
        $product->setFirstname('this is first name test ');

        $dm = $this->get('doctrine_mongodb')->getManager();
        $dm->persist($product);
        $dm->flush();

        return new Response('Created product id ' . $product->getId());
    }

    /**
     * @Route("/createprofile")
     */
    public function createprofileAction() {

        $profile = $this->get('doctrine_mongodb')->getManager()->getRepository('AppBundle:Profile')->findOneById('58abebbd29c39fec15000029');
//
//        $contacts = $dm->getContact();
//        foreach ($contacts as $contact) {
//            echo $contact->getPhoneNumber()."<br>";
//        }
//        exit;
        //$dm = $this->get('doctrine_mongodb')->getManager();
        $dm = $this->getDoctrine('doctrine_mongodb')->getManager();


        $profile = new Profile();
        $profile->setFirstName('firstname');
        $profile->setLastName('lastname');
        $dm->persist($profile);

//        $address = new Address();
//
//        $address->setCity('lahore');
//        $address->setCountry("pakistan");
//        $address->setStreet('DHA');
//        $address->setZipcode('123456789');
//        $profile->addAddress($address);
//
//        $contact = new Contact();
//        $contact->setIsDefault(1);
//        $contact->setPhoneNumber('14234234224');
//        $profile->addContact($contact);



        $dm->flush();

        return new Response('Created product id ' . $profile->getId());
    }

}
