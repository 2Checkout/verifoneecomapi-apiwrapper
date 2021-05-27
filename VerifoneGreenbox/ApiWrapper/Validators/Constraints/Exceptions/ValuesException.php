<?php

namespace VerifoneGreenbox\ApiWrapper\Validators\Constraints\Exceptions;

class ValuesException extends \Exception
{
    public function __construct($message = '', $code = 0, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
