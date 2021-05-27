<?php

namespace VerifoneGreenbox\ApiWrapper\Validators\ApiEntity\Checkout;

use VerifoneGreenbox\ApiWrapper\ApiEntity\Checkout\FormSettings;
use VerifoneGreenbox\ApiWrapper\Validators\Constraints\MaxLengthConstraint;
use VerifoneGreenbox\ApiWrapper\Validators\Constraints\StringConstraint;

class FormSettingsValidator
{
    public function validate(FormSettings $formSettings)
    {
        $reflection = new \ReflectionClass($formSettings);
        $objectProperties = $reflection->getProperties(\ReflectionProperty::IS_PRIVATE);

        foreach($objectProperties as $property) {
           $name =  $property->getName();
            if ($formSettings->{'get'. ucfirst($name)}() !== null) {
                new StringConstraint($formSettings->{'get'. ucfirst($name)}(), sprintf('The field %s must be a string', $name));
                new MaxLengthConstraint($formSettings->{'get'. ucfirst($name)}(), 50,sprintf('The field %s must be at most 50 characters long', $name));
            }
        }
    }
}
