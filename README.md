# Laravel DisableUpdatedAt Trait

A quick and easy way to disable the `updated_at` column on an Eloquent Model.

### Installing

The easiest way to install the the script is by using composer.

```shell
composer require wnx/larvel-disable-updated-at
```

## Usage

After installing the package you can use the trait in your models like this:

```php
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Wnx\DisableUpdatedAt\DisableUpdatedAt;

class Page extends Model
{
    use DisableUpdatedAt;
}
```

## Running the tests

There are some phpunit tests. You can run them with the following command.

```shell
phpunit
```

## Versioning

We use [SemVer](http://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://github.com/stefanzweifel/laravel-disable-updated-at/tags).

## Authors

* **Stefan Zweifel** - *Initial work* - [stefanzweifel](https://github.com/stefanzweifel)

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.