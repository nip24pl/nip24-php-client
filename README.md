# NIP24 Client for PHP

This is the official repository for [NIP24](https://nip24.pl) Client for PHP

This library contains validators for common Polish tax numbers like NIP, REGON and KRS. Validators for EU VAT ID
and IBAN are also included. After registration at [NIP24](https://nip24.pl) Portal this library could be used for
various on-line validations of Polish and EU companies. Please, visit our web page for more details.

## Documentation

The documentation and samples are available [here](https://nip24.pl/dokumentacja/).

## How to use

### Composer

The release version of the library is published in [Packagist](https://packagist.org/packages/nip24/client).
Add the following dependency using the _composer_ tool:

```bash
composer require nip24/client
```

### Manual setup

Copy the _NIP24_ directory and its contents somewhere within your project structure. Then include _NIP24/NIP24Client.php_
in your source code (it provides all API definitions) and call the autoloader function.

```php
require_once 'NIP24/NIP24Client.php';
			
\NIP24\NIP24Client::registerAutoloader();
```

## License

This project is delivered under Apache License, Version 2.0:

- [![License (Apache 2.0)](https://img.shields.io/badge/license-Apache%20version%202.0-blue.svg?style=flat-square)](http://www.apache.org/licenses/LICENSE-2.0)