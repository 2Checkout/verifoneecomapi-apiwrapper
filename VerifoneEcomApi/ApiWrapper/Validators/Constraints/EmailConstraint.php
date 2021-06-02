<?php

namespace VerifoneEcomAPI\ApiWrapper\Validators\Constraints;

use VerifoneEcomAPI\ApiWrapper\Validators\Constraints\Exceptions\EmptyValueException;

class EmailConstraint {
    public function __construct($parameter, $message = '') {
        if(!filter_var($parameter, FILTER_VALIDATE_EMAIL)) {
            if($message) {
                throw new EmptyValueException($message);
            }
            throw new EmptyValueException(sprintf('Parameter %s is required and must have a non empty value', $parameter));
        }
    }
}



