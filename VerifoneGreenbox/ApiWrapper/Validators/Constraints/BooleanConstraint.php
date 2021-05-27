<?php

namespace VerifoneGreenbox\ApiWrapper\Validators\Constraints;

use VerifoneGreenbox\ApiWrapper\Validators\Constraints\Exceptions\BooleanException;

class BooleanConstraint
{
    public function __construct($parameter, $message = '')
    {
        if (!is_bool($parameter)) {
            if ($message) {
                throw new BooleanException($message);
            }
            throw new BooleanException(sprintf('Parameter %s must be a boolean', $parameter));
        }
    }
}