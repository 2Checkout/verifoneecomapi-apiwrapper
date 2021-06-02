<?php

namespace VerifoneEcomAPI\ApiWrapper\Validators\Constraints;

use VerifoneEcomAPI\ApiWrapper\Validators\Constraints\Exceptions\EmptyValueException;

class NotBlankConstraint {
    public function __construct($parameter, $message = '') {
        if(empty($parameter)) {
            if($message) {
                throw new EmptyValueException($message);
            }
            throw new EmptyValueException(sprintf('Parameter %s is required and must have a non empty value', $parameter));
        }
    }
}