<?php

namespace VerifoneEcomAPI\ApiWrapper\Validators\Constraints\Exceptions;

class RequiredConstraintException extends ConstraintException
{
    public function __construct($message = '', $code = 0, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
