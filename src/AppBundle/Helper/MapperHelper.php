<?php

namespace AppBundle\Helper;

require_once __DIR__ . '/../../../vendor/autoload.php';

use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

final class MapperHelper {

    private $serializer;

    public static function getMapper() {
        static $inst = null;
        if ($inst === null) {
            $inst = new MapperHelper();
        }
        return $inst;
    }

    public function jsonToDTO($json, $dto) {
        try {
            return $this->serializer->deserialize($json, $dto->getSelf(), 'json', array('object_to_populate' => $dto));
        } catch (\Exception $ex) {
            
        }
    }

    public function dtoToDoc($dto, $doc) {  // source dto and destination is document
        try {
            return $this->mergeData($this->serializeIt($dto), $this->serializeIt($doc), $doc);
        } catch (\Exception $ex) {
            
        }
    }

    public function docToDto($doc, $dto) {  // source dto and destination is document
        try {
            return $this->mergeData($this->serializeIt($doc), $this->serializeIt($dto), $dto);
        } catch (\Exception $ex) {
            
        }
    }

    public function getDTOs($data) {
        return $this->serializer->serialize($data, 'json');
    }

    private function __construct() {
        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $this->serializer = new Serializer($normalizers, $encoders);
    }

    private function serializeIt($obj) {
        return $this->serializer->serialize($obj, 'json');
    }

    private function mergeData($src, $dest, $obj) {
        
        $newMerge = $this->serializer->serialize(array_merge(json_decode($dest, true), json_decode($src, true)), 'json');
        return $this->serializer->deserialize($newMerge, $obj->getSelf(), 'json', array('object_to_populate' => $obj));
    }

}
