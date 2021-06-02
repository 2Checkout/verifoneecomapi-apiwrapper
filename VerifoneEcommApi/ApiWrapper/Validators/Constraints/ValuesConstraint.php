<?php

namespace VerifoneEcomAPI\ApiWrapper\Validators\Constraints;

use VerifoneEcomAPI\ApiWrapper\Validators\Constraints\Exceptions\ValuesException;

class ValuesConstraint
{
    public function __construct($parameter, array $values, $message = '')
    {
        if (!in_array($parameter, $values)) {
            if ($message) {
                throw new ValuesException($message);
            }
            throw new ValuesException(vsprintf(
                'Value is not valid, it must be one of ' . str_repeat('%s', count($values)),
                $values
            )
            . sprintf(', got %s instead.', $parameter)
            );
        }
    }
}