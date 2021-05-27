<?php

namespace VerifoneGreenbox\ApiWrapper\ApiObject;

use VerifoneGreenbox\ApiWrapper\Transformers\ToArray;
use VerifoneGreenbox\ApiWrapper\Transformers\ToJson;

/**
 * Class AbstractApiObject
 * @package VerifoneGreenbox\ApiWrapper\ApiObject
 */
abstract class AbstractApiObject implements ToArray, ToJson
{
    /**
     * @throws \Exception
     */
    protected function validate()
    {
        throw new \Exception('You must implement the "validate" function');
    }

    protected function buildObjectArray($object)
    {
        $array = [];

        $reflection = new \ReflectionClass($object);
        $objectProperties = $reflection->getProperties(\ReflectionProperty::IS_PRIVATE);

        foreach($objectProperties as $property) {
            $name =  $property->getName();
            if ($object->{'get'. ucfirst($name)}() !== null) {
                $pieces = preg_split('/(?=[A-Z-0-9])/',$name);
                $array_key_string = '';
                foreach($pieces as $piece) {
                    $array_key_string .= strtolower($piece). '_';
                }
                $array_key_string = rtrim($array_key_string, '_');

                $array[$array_key_string] = $object->{'get'. ucfirst($name)}();
            }
        }

        return $array;
    }
}