# This is debug-query package

## Installation

You can install the package via composer:

```bash
composer require bnhashem/debug-query --dev
```

## Usage

```php

$users = User::where('email', 'test@test.com');
$users->sql();
```

## Show Sql Query
```php
"select * from `users` where `email` = 'test@test.com'"
```

[All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
