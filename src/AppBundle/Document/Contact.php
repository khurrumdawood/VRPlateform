<?php

namespace AppBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/** @ODM\EmbeddedDocument */
class Contact {

    /** @ODM\Field(type="boolean") */
    protected $isDefault;

    /** @ODM\Field(type="string") */
    protected $phoneNumber;

    public function setIsdefault($isDefault) {
        $this->isDefault = $isDefault;
    }

    public function getIsdefault() {
        return $this->isDefault;
    }

    public function setPhoneNumber($phoneNumber) {
        $this->phoneNumber = $phoneNumber;
    }

    public function getPhoneNumber() {
        return $this->phoneNumber;
    }

}
