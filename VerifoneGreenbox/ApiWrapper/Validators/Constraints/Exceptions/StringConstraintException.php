<?php

namespace VerifoneGreenbox\ApiWrapper\Validators\Constraints\Exceptions;

class StringConstraintException extends ConstraintException
{
    public function __construct($message = '', $code = 0, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
