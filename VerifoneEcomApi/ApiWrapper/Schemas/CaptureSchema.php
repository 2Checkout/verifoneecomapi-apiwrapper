<?php

namespace VerifoneEcomAPI\ApiWrapper\Schemas;

/**
 * Class CaptureSchema
 * @package VerifoneEcomAPI\ApiWrapper\Schemas
 */
class CaptureSchema implements SchemaInterface
{
    public function getSchema()
    {
        return [
            'amount' => [
                'type' => 'integer',
                'required' => true
            ],
        ];
    }
}