<?php

namespace VerifoneEcomAPI\ApiWrapper\Validators\Constraints\Exceptions;

class EmptyValueException extends ConstraintException
{
    public function __construct($message = '', $code = 0, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
