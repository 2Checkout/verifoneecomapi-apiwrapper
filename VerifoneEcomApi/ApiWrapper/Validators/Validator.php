<?php

namespace VerifoneEcomAPI\ApiWrapper\Validators;

use VerifoneEcomAPI\ApiWrapper\Schemas\SchemaInterface;
use VerifoneEcomAPI\ApiWrapper\Validators\Constraints\BooleanConstraint;
use VerifoneEcomAPI\ApiWrapper\Validators\Constraints\IntegerConstraint;
use VerifoneEcomAPI\ApiWrapper\Validators\Constraints\MaxLengthConstraint;
use VerifoneEcomAPI\ApiWrapper\Validators\Constraints\RegexConstraint;
use VerifoneEcomAPI\ApiWrapper\Validators\Constraints\RequiredConstraint;
use VerifoneEcomAPI\ApiWrapper\Validators\Constraints\StringConstraint;
use VerifoneEcomAPI\ApiWrapper\Validators\Constraints\ValuesConstraint;

/**
 * Class Validator
 * @package VerifoneEcomAPI\ApiWrapper\Validators
 */
class Validator
{
    /**
     * @param SchemaInterface $schema
     * @param array $toValidate
     * @throws \Exception
     */
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
                throw new \Exception(sprintf('Key %s is not present in schema', $key));
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