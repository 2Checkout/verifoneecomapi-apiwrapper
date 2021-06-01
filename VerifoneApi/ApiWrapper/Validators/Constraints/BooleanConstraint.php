<?php

namespace VerifoneApi\ApiWrapper\Validators\Constraints;

use VerifoneApi\ApiWrapper\Validators\Constraints\Exceptions\BooleanException;

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