# Laravel DisableUpdatedAt Trait

[![Build Status](https://travis-ci.org/stefanzweifel/laravel-disable-updated-at.svg)](https://travis-ci.org/stefanzweifel/laravel-disable-updated-at)
[![StyleCI](https://styleci.io/repos/103444695/shield?branch=master)](https://styleci.io/repos/103444695)
[![Latest Stable Version](https://poser.pugx.org/wnx/laravel-disable-updated-at/v/stable)](https://packagist.org/packages/wnx/laravel-disable-updated-at)
[![Total Downloads](https://poser.pugx.org/wnx/laravel-disable-updated-at/downloads)](https://packagist.org/packages/wnx/laravel-disable-updated-at)
[![License](https://poser.pugx.org/wnx/laravel-disable-updated-at/license)](https://packagist.org/packages/wnx/laravel-disable-updated-at)


A quick and easy way to disable the `updated_at` column on an Eloquent Model. (For more information on how to use this Trait read [this blog post](https://stefanzweifel.io/posts/disableupdatedat-trait-for-laravel-5-4))

### Installing

The easiest way to install the the script is by using composer.

```shell
composer require wnx/laravel-disable-updated-at
```

**Using Laravel >=5.5.5?**: If you've installed Laravel Version >= 5.5.5 you don't need this package. The behaviour [has been updated](https://github.com/laravel/framework/pull/21178) in the [5.5.5 Release](https://github.com/laravel/framework/releases/tag/v5.5.5).
You can disable the `updated_at` column by updating the `UPDATED_AT` constant like this:

```php
class Page extends Model
{
    const UPDATED_AT = null;
}
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
