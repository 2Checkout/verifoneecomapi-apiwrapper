<?php

namespace VerifoneEcomAPI\ApiWrapper\Validators\Constraints;

use VerifoneEcomAPI\ApiWrapper\Validators\Constraints\Exceptions\RegexConstraintException;

class RegexConstraint {
    public function __construct($parameter, $regexPattern, $message = '') {
        if(!preg_match($regexPattern, $parameter)) {
            if($message) {
                throw new RegexConstraintException($message);
            }
            throw new RegexConstraintException(sprintf('Provided value %s does not match regex provided %s', $parameter, $regexPattern));
        }
    }
}