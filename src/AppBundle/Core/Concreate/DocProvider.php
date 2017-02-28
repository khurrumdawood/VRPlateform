<?php

namespace AppBundle\Core\Concreate;

use Doctrine\ODM\MongoDB\DocumentManager;
use AppBundle\Core\Base\IDocProvider;


 class DocProvider  implements IDocProvider {

    private $PROFILE_REPO = 'AppBundle:Profile';
    private $USER_REPO = 'AppBundle:User';
    private $manager;
    public static function init(DocumentManager $manager) {
        static $inst = null;
        if ($inst === null) {
            $inst = new DocProvider($manager);
        }
        return $inst;
    }
    public function getManager() {
        return $this->manager;
    }

    public function Profiles() {
        return $this->manager->getRepository($this->PROFILE_REPO);
    }

    public function Users() {
        return $this->manager->getRepository('AppBundle:User');
    }
   
    public function Product() {
        return $this->manager->getRepository('AppBundle:Product');
    }
   
    private function __construct(DocumentManager $manager) {
       $this->manager=$manager;
    }

}
