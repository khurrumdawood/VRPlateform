<?php

// src/AppBundle/Document/User.php

namespace AppBundle\Document;

use FOS\UserBundle\Document\User as BaseUser;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 *
 * @MongoDB\Document
 */
class User extends BaseUser {

    /**
     * @MongoDB\Id(strategy="auto")
     */
    protected $id;

    public function __construct() {
        parent::__construct();
        // your own logic
    }

    /**
     * @MongoDB\Field(type="float")
     */
    protected $age;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $gender;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $profile;

    /**
     * Set age
     *
     * @param float $age
     * @return self
     */
    public function setAge($age) {
        $this->age = $age;
        return $this;
    }

    /**
     * Get age
     *
     * @return float $age
     */
    public function getAge() {
        return $this->age;
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
     * Set profile
     *
     * @param string $profile
     * @return self
     */
    public function setProfile($profile) {
        $this->profile = $profile;
        return $this;
    }

    /**
     * Get profile
     *
     * @return string $profile
     */
    public function getProfile() {
        return $this->profile;
    }

    public function getSelf() {
        return static::class;
    }

}
