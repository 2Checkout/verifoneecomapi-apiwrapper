<?php

namespace VerifoneGreenbox\ApiWrapper\Schemas;

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
            'reference_d' => [
                'required' => true,
                'type' => 'integer',
            ],
            'created_date_time' => [
                'required' => true,
                'type' => 'integer',
            ],
        ];
    }
}
