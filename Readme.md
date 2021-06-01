# Verifone API Wrapper

Verifone API wrapper is a simple PHP library meant for quickstart some of the most used Verifone API endpoints

## Installation

Use the package manager [composer](https://getcomposer.org/) to install this package.

```bash
composer require verifonegreenbox/apiwrapper
```

## Usage

```phpt
<?php

$client = new Client(
    new Na(), 
    $this->verifone_settings, 
    $this->verifone_auth_helper, 
    new SimpleCurl()
);
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](https://choosealicense.com/licenses/mit/)