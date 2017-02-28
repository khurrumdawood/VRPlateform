<?php

namespace AppBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
use Doctrine\Common\Collections\ArrayCollection;
use AppBundle\Helper\MapperHelper;

/**
 * AppBundle\Document\Profile
 *
 * @ODM\Document(collection="profile")
 */
class  Base{

    public function __construct() {
        
    }

    /**
     * @var MongoId $id
     *
     * @ODM\Id(strategy="AUTO")
     */
    protected $id;

   
    /**
     * Get id
     *
     * @return id $id
     */
    public function getId() {
        return $this->id;
    }
    
    public function toDTO($dto){
        return MapperHelper::getMapper()->docToDto($this, $dto);
    }
     public function getSelf() {
            return static::class;
    }
}

