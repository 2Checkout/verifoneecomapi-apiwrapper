<?php

namespace VerifoneApi\ApiWrapper\Validators\Constraints\Exceptions;

class LengthConstraintException extends ConstraintException
{
    public function __construct($message = '', $code = 0, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}