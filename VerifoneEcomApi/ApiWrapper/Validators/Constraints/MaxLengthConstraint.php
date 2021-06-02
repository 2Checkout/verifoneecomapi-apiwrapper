<?php

namespace VerifoneEcomAPI\ApiWrapper\Validators\Constraints;

use VerifoneEcomAPI\ApiWrapper\Validators\Constraints\Exceptions\LengthConstraintException;

class MaxLengthConstraint {
    public function __construct($parameter, $length, $message = '') {
        if(is_array($parameter) && count($parameter) > $length) {
            if($message) {
                throw new LengthConstraintException($message);
            }
            throw new LengthConstraintException(sprintf('Parameter %s is required to be at most %s', json_encode($parameter), $length));
        }

        if(is_string($parameter) && strlen($parameter) > $length) {
            if($message) {
                throw new LengthConstraintException($message);
            }
            throw new LengthConstraintException(sprintf('Parameter %s is required to be at most %s', $parameter, $length));
        }

        if($parameter instanceof \Countable && count($parameter) > $length) {
            if($message) {
                throw new LengthConstraintException($message);
            }
            throw new LengthConstraintException(sprintf('Parameter is required to be at most %s', $length));
        }
    }
}