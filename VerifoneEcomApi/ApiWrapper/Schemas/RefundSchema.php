<?php

namespace VerifoneEcomAPI\ApiWrapper\Schemas;

/**
 * Class RefundSchema
 * @package VerifoneEcomAPI\ApiWrapper\Schemas
 */
class RefundSchema implements SchemaInterface
{
    public function getSchema()
    {
        return [
            'amount' => [
                'required' => true,
                'type' => 'integer',
            ],
            'reason' => [
                'required' => false,
                'type' => 'string',
            ],
            'id' => [
                'required' => true,
                'type' => 'string',
            ],
            'reference_id' => [
                'required' => false,
                'type' => 'integer',
            ],
            'created_date_time' => [
                'required' => false,
                'type' => 'string',
            ],
        ];
    }
}
