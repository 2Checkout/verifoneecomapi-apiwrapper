<?php

namespace VerifoneGreenbox\ApiWrapper\Validators\ApiEntity\Checkout;

use VerifoneGreenbox\ApiWrapper\ApiEntity\Checkout\I18n;
use VerifoneGreenbox\ApiWrapper\Validators\Constraints\BooleanConstraint;
use VerifoneGreenbox\ApiWrapper\Validators\Constraints\MaxLengthConstraint;
use VerifoneGreenbox\ApiWrapper\Validators\Constraints\StringConstraint;

class I18nValidator
{
    public function validate(I18n $i18n)
    {
        if ($i18n->getDefaultLanguage() !== null) {
            new StringConstraint($i18n->getDefaultLanguage(), 'The field $i18n->getDefaultLanguage must be a string');
            new MaxLengthConstraint($i18n->getDefaultLanguage(), 2,'The field $i18n->getDefaultLanguage must have a max length of 2');
        }

        if ($i18n->getShowLanguageOptions() !== null) {
            new BooleanConstraint($i18n->getShowLanguageOptions(), 'The field $i18n->getShowLanguageOptions must be a boolean');
        }
    }
}
