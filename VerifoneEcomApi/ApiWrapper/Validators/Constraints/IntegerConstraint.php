<?php

namespace VerifoneEcomAPI\ApiWrapper\Validators\Constraints;

use VerifoneEcomAPI\ApiWrapper\Validators\Constraints\Exceptions\IntegerException;

class IntegerConstraint {
    public function __construct($parameter, $message = '') {
        if(!is_int($parameter)) {
            if($message) {
                throw new IntegerException($message);
            }
            throw new IntegerException(sprintf('Parameter %s is required and must have be an integer', $parameter));
        }
    }
}



