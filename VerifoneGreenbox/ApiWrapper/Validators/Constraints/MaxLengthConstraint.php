<?php

namespace VerifoneGreenbox\ApiWrapper\Validators\Constraints;

use VerifoneGreenbox\ApiWrapper\Validators\Constraints\Exceptions\LengthConstraintException;

class MaxLengthConstraint {
    public function __construct($parameter, $length, $message = '') {
        if(is_array($parameter) && count($length) > $length) {
            if($message) {
                throw new LengthConstraintException($message);
            }
            throw new LengthConstraintException(sprintf('Parameter %s is required to be at least %s', json_encode($parameter), $length));
        }

        if(is_string($parameter) && strlen($parameter) > $length) {
            if($message) {
                throw new LengthConstraintException($message);
            }
            throw new LengthConstraintException(sprintf('Parameter %s is required to be at least %s', $parameter, $length));
        }

        if($parameter instanceof \Countable && count($length) > $length) {
            if($message) {
                throw new LengthConstraintException($message);
            }
            throw new LengthConstraintException(sprintf('Parameter is required to be at least %s', $length));
        }
    }
}