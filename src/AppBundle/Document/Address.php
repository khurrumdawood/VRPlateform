<?php

namespace AppBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/** @ODM\EmbeddedDocument */
class Address {

    /** @ODM\Field(type="string") */
    protected $street;

    /** @ODM\Field(type="string") */
    protected $city;

    /** @ODM\Field(type="string") */
    protected $country;

    /** @ODM\Field(type="string") */
    protected $zipcode;

    public function getStreet() {
        return $this->street;
    }

    public function setStreet($street) {
        $this->street = $street;
    }

    public function setCity($city) {
        $this->city = $city;
        return $this;
    }

    public function getCity() {
        return $this->city;
    }

    public function setCountry($country) {
        $this->country = $country;
    }

    public function getCountry() {
        return $this->country;
    }

    public function setZipcode($zipcode) {
        $this->zipcode = $zipcode;
    }

    public function getZipcode() {
        return $this->zipcode;
    }

}
