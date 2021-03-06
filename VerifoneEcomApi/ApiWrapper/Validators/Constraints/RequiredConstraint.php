<?php

namespace VerifoneEcomAPI\ApiWrapper\Validators\Constraints;

use VerifoneEcomAPI\ApiWrapper\Validators\Constraints\Exceptions\RequiredConstraintException;

class RequiredConstraint extends NotBlankConstraint {
    public function __construct($parameter, $message = '') {
        try {
            parent::__construct($parameter);
        } catch (\Exception $exception) {
            if($message) {
                throw new RequiredConstraintException($message);
            }
            throw new RequiredConstraintException(sprintf('The field %s is required', $parameter));
        }
    }
}