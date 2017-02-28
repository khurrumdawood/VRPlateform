<?php

namespace AppBundle\Shared\DTO;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use AppBundle\Helper\MapperHelper;

class BaseDTO {

    public $id;
    public function getSelf() {
            return static::class;
    }

    public function toDoc($doc) {
        return MapperHelper::getMapper()->dtoToDoc($this,$doc);
    }
}
