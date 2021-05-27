<?php

namespace VerifoneGreenbox\ApiWrapper\Validators;

use VerifoneGreenbox\ApiWrapper\Schemas\SchemaInterface;
use VerifoneGreenbox\ApiWrapper\Validators\Constraints\BooleanConstraint;
use VerifoneGreenbox\ApiWrapper\Validators\Constraints\IntegerConstraint;
use VerifoneGreenbox\ApiWrapper\Validators\Constraints\MaxLengthConstraint;
use VerifoneGreenbox\ApiWrapper\Validators\Constraints\RegexConstraint;
use VerifoneGreenbox\ApiWrapper\Validators\Constraints\RequiredConstraint;
use VerifoneGreenbox\ApiWrapper\Validators\Constraints\StringConstraint;
use VerifoneGreenbox\ApiWrapper\Validators\Constraints\ValuesConstraint;

class Validator
{
    public function validate(SchemaInterface $schema, array $toValidate)
    {
        $schema = $schema->getSchema();

        $this->validateRecursive($schema, $toValidate);
    }

    private function validateRecursive($schema, $toValidate)
    {
        foreach ($toValidate as $key => $item) {
            if (is_array($item)) {
                $this->validateRecursive($schema[$key], $item);
            }

            if (!isset($schema[$key])) {
                throw new \Exception('Invalid key');
            }

            foreach ($schema[$key] as $schemaKey => $schemaValue) {
                if ($schemaKey == 'required' && $schemaValue == true) {
                    new RequiredConstraint($item);
                }

                if ($schemaKey == 'type' && $schemaValue == 'string') {
                    new StringConstraint($item);
                }

                if ($schemaKey == 'maxLen') {
                    new MaxLengthConstraint($item, $schemaValue);
                }

                if ($schemaKey == 'type' && $schemaValue == 'integer') {
                    new IntegerConstraint($item);
                }

                if ($schemaKey == 'type' && $schemaValue == 'regex') {
                    new RegexConstraint($item, $schema[$key]['regex']);
                }

                if ($schemaKey == 'in_values') {
                    new ValuesConstraint($item, $schema[$key]['in_values']);
                }

                if ($schemaKey == 'type' && $schemaValue == 'boolean') {
                    new BooleanConstraint($item);
                }
            }
        }
    }
}