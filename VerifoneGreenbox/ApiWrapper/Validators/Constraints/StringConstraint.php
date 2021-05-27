<?php

namespace VerifoneGreenbox\ApiWrapper\Validators\Constraints;

use VerifoneGreenbox\ApiWrapper\Validators\Constraints\Exceptions\StringConstraintException;

class StringConstraint {
    public function __construct($parameter, $message = '') {
        if(!is_string($parameter)) {
            if($message) {
                throw new StringConstraintException($message);
            }
            throw new StringConstraintException('Value must be a string');
        }
    }
}