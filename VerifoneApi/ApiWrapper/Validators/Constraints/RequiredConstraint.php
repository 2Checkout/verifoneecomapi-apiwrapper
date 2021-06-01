<?php

namespace VerifoneApi\ApiWrapper\Validators\Constraints;

use VerifoneApi\ApiWrapper\Validators\Constraints\Exceptions\RequiredConstraintException;

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