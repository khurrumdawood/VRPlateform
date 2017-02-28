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
class Profile {

    public function __construct() {
        
        $this->addresses = new ArrayCollection();
        $this->contacts = new ArrayCollection();
    }

    /**
     * @var MongoId $id
     *
     * @ODM\Id(strategy="AUTO")
     */
    public $id;

    /**
     * @var string $firstName
     *
     * @ODM\Field(name="firstName", type="string")
     */
    public $firstName;

    /**
     * @var string $lastName
     *
     * @ODM\Field(name="lastName", type="string")
     */
    public $lastName;

    /**
     * @var string $gender
     *
     * @ODM\Field(name="gender", type="collection")
     */
    public $gender;

    /**
     * @var string $email
     *
     * @ODM\Field(name="email", type="string")
     */
    public $email;

    /**
     *
     * @ODM\EmbedMany(targetDocument="Contact") 
     */
    public $contacts = array();

    /**
     * @ODM\EmbedMany(targetDocument="Address") 
     */
    public $addresses = array();

    /**
     * Get id
     *
     * @return id $id
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return self
     */
    public function setFirstName($firstName) {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * Get firstName
     *
     * @return string $firstName
     */
    public function getFirstName() {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return self
     */
    public function setLastName($lastName) {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * Get lastName
     *
     * @return string $lastName
     */
    public function getLastName() {
        return $this->lastName;
    }

    /**
     * Set gender
     *
     * @param string $gender
     * @return self
     */
    public function setGender($gender) {
        $this->gender = $gender;
        return $this;
    }

    /**
     * Get gender
     *
     * @return string $gender
     */
    public function getGender() {
        return $this->gender;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return self
     */
    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    /**
     * Get email
     *
     * @return string $email
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * Set contact
     *
     * @return self
     */
    public function setContacts($contacts) {
        $this->contacts = $contacts;
        return $this;
    }

    /**
     * Get contact
     *
     */
    public function getContacts() {
        return $this->contacts;
    }

    /**
     * Set address
     * @return self
     */
    public function setAddresses($addresses) {
        $this->addresses = $addresses;
        return $this;
    }

    /**
     * Get address
     *
     * @return string $address
     */
    public function getAddresses() {
        return $this->addresses;
    }

    /**
     * Add contact
     *
     * @param AppBundle\Document\Contact $contact
     */
    public function addContact(Contact $contact) {
        $this->contacts[] = $contact;
    }

    /**
     * Remove contact
     *
     * @param AppBundle\Document\Contact $contact
     */
    public function removeContact(Contact $contact) {
        $this->contacts->removeElement($contact);
    }

    /**
     * Add address
     *
     * @param AppBundle\Document\UserAddress $address
     */
    public function addAddress(Address $address) {
        $this->addresses[] = $address;
    }

    /**
     * Remove address
     *
     * @param AppBundle\Document\UserAddress $address
     */
    public function removeAddress(Address $address) {
        $this->addresses->removeElement($address);
    }

    public function toDTO($dto) {
        return MapperHelper::getMapper()->docToDto($this, $dto);
    }

}
