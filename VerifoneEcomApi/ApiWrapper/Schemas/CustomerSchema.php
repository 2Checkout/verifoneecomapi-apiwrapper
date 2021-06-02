<?php

namespace VerifoneEcomAPI\ApiWrapper\Schemas;

/**
 * Class CustomerSchema
 * @package VerifoneEcomAPI\ApiWrapper\Schemas
 */
class CustomerSchema implements SchemaInterface
{
    public function getSchema()
    {
        return [
            'billing' => [
                'address_1' => [
                    'required' => false,
                    'type' => 'string',
                    'maxLen' => 50
                ],
                'address_2' => [
                    'required' => false,
                    'type' => 'string',
                    'maxLen' => 50
                ],
                'address_3' => [
                    'required' => false,
                    'type' => 'string',
                    'maxLen' => 50
                ],
                'city' => [
                    'required' => false,
                    'type' => 'string',
                    'maxLen' => 50
                ],
                'country_code' => [
                    'required' => false,
                    'type' => 'string',
                    'maxLen' => 50
                ],
                'first_name' => [
                    'required' => false,
                    'type' => 'string',
                    'maxLen' => 50
                ],
                'last_name' => [
                    'required' => false,
                    'type' => 'string',
                    'maxLen' => 50
                ],
                'phone' => [
                    'required' => false,
                    'type' => 'regex',
                    'regex' => '/^[0-9-\s\-+().-]+$/',
                    'maxLen' => 50
                ],
                'postal_code' => [
                    'required' => false,
                    'type' => 'string',
                    'maxLen' => 50
                ],
                'state' => [
                    'required' => false,
                    'type' => 'string',
                    'maxLen' => 50
                ],
            ],
            'company_name' => [
                'required' => false,
                'type' => 'string',
                'maxLen' => 100
            ],
            'company_registration_number' => [
                'required' => false,
                'type' => 'string',
                'maxLen' => 24
            ],
            'email_address' =>  [
                'required' => false,
                'type' => 'string|email',
                'maxLen' => 255
            ],
            'entity_id' => [
                'required' => true,
                'type' => 'string',
            ],
            'phone_number' =>  [
                'required' => false,
                'type' => 'regex',
                'regex' => '/^[0-9-\s\-+().-]+$/'
            ],
            'shipping' => [
                'address_1' => [
                    'required' => false,
                    'type' => 'string',
                    'maxLen' => 50
                ],
                'address_2' => [
                    'required' => false,
                    'type' => 'string',
                    'maxLen' => 50
                ],
                'address_3' => [
                    'required' => false,
                    'type' => 'string',
                    'maxLen' => 50
                ],
                'city' => [
                    'required' => false,
                    'type' => 'string',
                    'maxLen' => 50
                ],
                'country_code' => [
                    'required' => false,
                    'type' => 'string',
                    'maxLen' => 50
                ],
                'first_name' => [
                    'required' => false,
                    'type' => 'string',
                    'maxLen' => 50
                ],
                'last_name' => [
                    'required' => false,
                    'type' => 'string',
                    'maxLen' => 50
                ],
                'phone' => [
                    'required' => false,
                    'type' => 'regex',
                    'regex' => '/^[0-9-\s\-+().-]+$/',
                    'maxLen' => 50
                ],
                'postal_code' => [
                    'required' => false,
                    'type' => 'string',
                    'maxLen' => 50
                ],
                'state' => [
                    'required' => false,
                    'type' => 'string',
                    'maxLen' => 50
                ],
            ],
            'title' => [
                'required' => false,
                'type' => 'regex',
                'regex' => '/^[a-zA-Z-\s.]+$/',
                'maxLen' => 50
            ],
            'work_phone' => [
                'required' => false,
                'type' => 'regex',
                'regex' => '/^[0-9-\s\-+().-]+$/',
                'maxLen' => 50
            ],
        ];
    }
}
