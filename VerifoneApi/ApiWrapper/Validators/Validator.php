<?php

namespace VerifoneApi\ApiWrapper\Validators;

use VerifoneApi\ApiWrapper\Schemas\SchemaInterface;
use VerifoneApi\ApiWrapper\Validators\Constraints\BooleanConstraint;
use VerifoneApi\ApiWrapper\Validators\Constraints\IntegerConstraint;
use VerifoneApi\ApiWrapper\Validators\Constraints\MaxLengthConstraint;
use VerifoneApi\ApiWrapper\Validators\Constraints\RegexConstraint;
use VerifoneApi\ApiWrapper\Validators\Constraints\RequiredConstraint;
use VerifoneApi\ApiWrapper\Validators\Constraints\StringConstraint;
use VerifoneApi\ApiWrapper\Validators\Constraints\ValuesConstraint;

/**
 * Class Validator
 * @package VerifoneApi\ApiWrapper\Validators
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