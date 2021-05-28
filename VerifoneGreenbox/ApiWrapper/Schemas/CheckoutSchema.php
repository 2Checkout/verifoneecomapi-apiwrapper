<?php

namespace VerifoneGreenbox\ApiWrapper\Schemas;

/**
 * Class CheckoutSchema
 * @package VerifoneGreenbox\ApiWrapper\Schemas
 */
class CheckoutSchema implements SchemaInterface
{
    public function getSchema()
    {
        return [
            'entity_id' => [
                'type' => 'string',
                'required' => true
            ],
            'currency_code' => [
                'type' => 'string',
                'required' => true
            ],
            'amount' => [
                'type' => 'integer',
                'required' => true
            ],
            'customer' => [
                'type' => 'string',
                'required' => true
            ],
            'configurations' => [
                'card' => [
                    'dynamic_descriptor' => [
                        'type' => 'string',
                        'required' => false
                    ],
                    'account_validation' => [
                        'type' => 'boolean',
                        'required' => false
                    ],
                    'capture_now' => [
                        'type' => 'boolean',
                        'required' => false
                    ],
                    'cvv_required' => [
                        'type' => 'boolean',
                        'required' => false
                    ],
                    'authorization_type' => [
                        'type' => 'string',
                        'required' => false,
                        'in_values' => ["PRE_AUTH", "FINAL_AUTH"],
                    ],
                    'shopper_interaction' => [
                        'type' => 'string',
                        'required' => false,
                        'in_values' => ["ECOMMERCE", "MAIL", "TELEPHONE"],
                    ],
                    'payment_contract_id' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'threed_secure' => [
                        'account_age_indicator' => [
                            'type' => 'string',
                            'required' => false,
                            'in_values' => ["01", "02", "03", "04", "05"],
                        ],
                        'account_create_date' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'account_change_indicator' => [
                            'type' => 'string',
                            'required' => false,
                            'in_values' => ["01", "02", "03", "04"],
                        ],
                        'account_change_date' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'account_pwd_change_indicator' => [
                            'type' => 'string',
                            'required' => false,
                            'in_values' => ["01", "02", "03", "04", "05"],
                        ],
                        'account_pwd_change_date' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'account_id' => [
                            'type' => 'string',
                            'required' => false,
                            'maxLen' => 64,
                        ],
                        'account_purchases' => [
                            'type' => 'integer',
                            'required' => false,
                            'maxLen' => 5,
                        ],
                        'acs_window_size' => [
                            'type' => 'string',
                            'required' => false,
                            'in_values' => ["01", "02", "03", "04", "05"],
                        ],
                        'add_card_attempts' => [
                            'type' => 'integer',
                            'required' => false,
                            'maxLen' => 4,
                        ],
                        'address_match' => [
                            'type' => 'string',
                            'required' => false,
                            'in_values' => ["Y", "N"],
                        ],
                        'alternate_authentication_method' => [
                            'type' => 'string',
                            'required' => false,
                            'in_values' => ["01", "02", "03", "04", "05", "05"],
                        ],
                        'alternate_authentication_date' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'alternate_authentication_data' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'threeds_contract_id' => [
                            'type' => 'string',
                            'required' => true,
                            'maxLen' => 36,
                        ],
                        'authentication_indicator' => [
                            'type' => 'string',
                            'required' => false,
                            'in_values' => ["01", "02", "03", "04", "05"],
                        ],
                        'category_code' => [
                            'type' => 'integer',
                            'required' => false,
                            'maxLen' => 5,
                        ],
                        'challenge_indicator' => [
                            'type' => 'string',
                            'required' => false,
                            'in_values' => ["01", "02", "03", "04", "90"],
                        ],
                        'delivery_email' => [
                            'type' => 'string',
                            'required' => false,
                            'maxLen' => 255,
                        ],
                        'delivery_time_frame' => [
                            'type' => 'string',
                            'required' => false,
                            'in_values' => ["01", "02", "03", "04"],
                        ],
                        'enabled' => [
                            'type' => 'boolean',
                            'required' => false,
                        ],
                        'fraud_activity' => [
                            'type' => 'string',
                            'required' => false,
                            'in_values' => ["01", "02"],
                        ],
                        'gift_card_amount' => [
                            'type' => 'integer',
                            'required' => false,
                        ],
                        'gift_card_currency_code' => [
                            'type' => 'integer',
                            'required' => false,
                            'maxLen' => 3,
                        ],
                        'gift_card_count' => [
                            'type' => 'integer',
                            'required' => false,
                        ],
                        'installment' => [
                            'type' => 'integer',
                            'required' => false,
                        ],
                        'message_category' => [
                            'type' => 'string',
                            'required' => false,
                            'in_values' => ["01", "02"],
                        ],
                        'payment_account_indicator' => [
                            'type' => 'string',
                            'required' => false,
                            'in_values' => ["01", "02", "03", "04", "05"],
                        ],
                        'payment_account_age' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'pre_order_indicator' => [
                            'type' => 'string',
                            'required' => false,
                            'in_values' => ["01", "02"],
                        ],
                        'pre_order_date' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'prior_authentication_data' => [
                            'type' => 'string',
                            'required' => false,
                            'maxLen' => 2048
                        ],
                        'prior_authentication_method' => [
                            'type' => 'string',
                            'required' => false,
                            'in_values' => ["01", "02", "03", "04"],
                        ],
                        'prior_authentication_time' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'prior_authentication_ref' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'product_code' => [
                            'type' => 'string',
                            'required' => false,
                            'in_values' => ["PHY", "CHA", "ACF", "QCT", "PAL"],
                        ],
                        'recurring_end' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'recurring_frequency' => [
                            'type' => 'integer',
                            'required' => false,
                        ],
                        'reorder_indicator' => [
                            'type' => 'string',
                            'required' => false,
                            'in_values' => ["01", "02"],
                        ],
                        'requestor_id' => [
                            'type' => 'string',
                            'required' => false,
                            'maxLen' => 36
                        ],
                        'requestor_name' => [
                            'type' => 'string',
                            'required' => false,
                            'maxLen' => 40
                        ],
                        'shipping_address_usage_indicator' => [
                            'type' => 'string',
                            'required' => false,
                            'in_values' => ["01", "02", "03", "04"],
                        ],
                        'shipping_address_usage_date' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'shipping_method_indicator' => [
                            'type' => 'string',
                            'required' => false,
                            'in_values' => ["01", "02", "03", "04", "05", "06", "07"],
                        ],
                        'shipping_name_indicator' => [
                            'type' => 'string',
                            'required' => false,
                            'in_values' => ["01", "02"],
                        ],
                        'total_items' => [
                            'type' => 'regex',
                            'required' => false,
                            'regex' => '/^[0-9]{2}$/'
                        ],
                        'merchant_score' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'transaction_count_day' => [
                            'type' => 'integer',
                            'required' => false,
                        ],
                        'transaction_count_year' => [
                            'type' => 'integer',
                            'required' => false,
                        ],
                        'transaction_mode' => [
                            'type' => 'string',
                            'required' => false,
                            'in_values' => ["M", "P", "R", "S", "T"],
                        ],
                        'version' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                    ]
                ]
            ],
            'expiry_time' => [
                'type' => 'string',
                'required' => false,
            ],
            'merchant_reference' => [
                'type' => 'regex',
                'required' => false,
                'regex' => '/^[^=+\-@].*/'
            ],
            'return_url' => [
                'type' => 'string',
                'required' => false,
            ],
            'form_settings' => [
                'submit_title' => [
                    'type' => 'string',
                    'required' => false,
                    'maxLen' => 50,
                ],
                'use_different_brand' => [
                    'type' => 'string',
                    'required' => false,
                    'maxLen' => 50,
                ],
                'select_card_brand' => [
                    'type' => 'string',
                    'required' => false,
                    'maxLen' => 50,
                ],
                'brand_not_valid' => [
                    'type' => 'string',
                    'required' => false,
                    'maxLen' => 50,
                ],
                'cvv_not_valid' => [
                    'type' => 'string',
                    'required' => false,
                    'maxLen' => 50,
                ],
                'cvv3_not_valid' => [
                    'type' => 'string',
                    'required' => false,
                    'maxLen' => 50,
                ],
                'cvv4_not_valid' => [
                    'type' => 'string',
                    'required' => false,
                    'maxLen' => 50,
                ],
                'length_not_valid' => [
                    'type' => 'string',
                    'required' => false,
                    'maxLen' => 50,
                ],
                'month_not_valid' => [
                    'type' => 'string',
                    'required' => false,
                    'maxLen' => 50,
                ],
                'year_not_valid' => [
                    'type' => 'string',
                    'required' => false,
                    'maxLen' => 50,
                ],
                'nr_not_valid' => [
                    'type' => 'string',
                    'required' => false,
                    'maxLen' => 50,
                ],
                'cvv_placeholder3' => [
                    'type' => 'string',
                    'required' => false,
                    'maxLen' => 50,
                ],
                'cvv_placeholder4' => [
                    'type' => 'string',
                    'required' => false,
                    'maxLen' => 50,
                ],
                'card_number_placeholder' => [
                    'type' => 'string',
                    'required' => false,
                    'maxLen' => 50,
                ],
                'expiry_placeholder' => [
                    'type' => 'string',
                    'required' => false,
                    'maxLen' => 50,
                ],
            ],
            'i18n' => [
                'default_language' => [
                    'type' => 'string',
                    'required' => false,
                    'in_values' => ['en', 'fr'],
                ],
                'show_language_options' => [
                    'type' => 'boolean',
                    'required' => false,
                ],
            ]
        ];
    }
}