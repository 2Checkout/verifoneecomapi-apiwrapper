<?php

namespace VerifoneGreenbox\ApiWrapper\Validators\Constraints;

use VerifoneGreenbox\ApiWrapper\Validators\Constraints\Exceptions\RequiredConstraintException;

class RequiredConstraint extends NotBlankConstraint {
    public function __construct($parameter, $message = '') {
        try {
            parent::__construct($parameter);
        } catch (\Exception $exception) {
            if($message) {
                throw new RequiredConstraintException($message);
            }
            throw new RequiredConstraintException('The field is required');
        }
    }
}