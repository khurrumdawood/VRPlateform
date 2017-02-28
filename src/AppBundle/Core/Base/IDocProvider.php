<?php

namespace AppBundle\Core\Base;

use Doctrine\ODM\MongoDB\DocumentManager;

interface IDocProvider {

    public static function init(DocumentManager $manager);

    public function Profiles();

    public function Users();

}
