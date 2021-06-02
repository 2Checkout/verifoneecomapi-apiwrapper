# Verifone API Wrapper

Verifone API wrapper is a simple PHP library meant for quickstart some of the most used Verifone API endpoints

## Installation

Use the package manager [composer](https://getcomposer.org/) to install this package.

```bash
composer require verifoneecommapi/apiwrapper
```

## Usage

```phpt
<?php

$settings = new Settings();
$settings
    ->setTest(true) //boolean
    ...

$auth = new TokenGenerator(); // must implement AuthenticationInterface

$client = new Client(
    new Na(), 
    $settings,
    $auth, 
    new SimpleCurl()
);

// create a customer that matches whatever your needs are
// more info here https://verifone.cloud/api-catalog/customer-api#tag/V2
$customer = array (
  'entity_id' => '1111111-22222-3333-4444-555555555',
  'billing' => 
  array (
    'address_1' => 'Some street',
    'city' => 'Some city',
    'country_code' => 'US',
    'first_name' => 'John',
    'last_name' => 'Doe',
    'phone' => '123456789',
    'postal_code' => '12345',
    'state' => 'OH',
  ),
  'shipping' => 
  array (
    'address_1' => 'Some street',
    'city' => 'Some city',
    'country_code' => 'US',
    'first_name' => 'John',
    'last_name' => 'Doe',
    'phone' => '123456789',
    'postal_code' => '12345',
    'state' => 'OH',
  ),
);

try {
    $result = $this->client->postCustomer($customer, new CustomerSchema());
    // alternatively you can skip the 2nd parameter to not do a check on the 
    // values passed in the customer array
    // $result = $this->client->postCustomer($customer);
} catch (\VerifoneEcommApi\ApiWrapper\Http\HttpException $exception) {
    // treat exception here
}

// create a checkout
// more info here https://verifone.cloud/api-catalog/checkout-documentation#operation/postV2Checkout

$chcekout = array (
  'entity_id' => '1111111-22222-3333-4444-555555555',
  'currency_code' => 'USD',
  'amount' => 100,
  'return_url' => 'https://some-return.com/url',
  'customer' => '1111111-22222-3333-4444-555555555',
  'merchant_reference' => '1',
  'configurations' => 
  array (
    'card' => 
    array (
      'cvv_required' => true,
      'payment_contract_id' => '1111111-22222-3333-4444-555555555',
      'threed_secure' => 
      array (
        'threeds_contract_id' => '1111111-22222-3333-4444-555555555',
        'enabled' => false,
        'transaction_mode' => 'S',
      ),
    ),
  ),
);

try {
    $result = $this->client->postCheckout($checkout, new CheckoutSchema());
    // alternatively you can skip the 2nd parameter to not do a check on the 
    // values passed in the checkout array
    // $result = $this->client->postCheckout($customer);
} catch (\VerifoneEcommApi\ApiWrapper\Http\HttpException $exception) {
    // treat exception here
}

```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.
## License
[MIT](https://choosealicense.com/licenses/mit/)