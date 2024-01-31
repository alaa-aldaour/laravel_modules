# Laravel-Modules (THIS IS FORKED COPY NOT FUNCTIONAL YET)

[![Latest Version on Packagist](https://img.shields.io/packagist/v/laravel-kit/modules.svg?style=flat-square)](https://packagist.org/packages/laravel-kit/modules)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/laravel-kit/modules/master.svg?style=flat-square)](https://travis-ci.org/laravel-kit/modules)
[![Scrutinizer Coverage](https://img.shields.io/scrutinizer/coverage/g/laravel-kit/modules.svg?maxAge=86400&style=flat-square)](https://scrutinizer-ci.com/g/laravel-kit/modules/?branch=master)
[![Quality Score](https://img.shields.io/scrutinizer/g/laravel-kit/modules.svg?style=flat-square)](https://scrutinizer-ci.com/g/laravel-kit/modules)
[![Total Downloads](https://img.shields.io/packagist/dt/laravel-kit/modules.svg?style=flat-square)](https://packagist.org/packages/laravel-kit/modules)

| **Laravel** | **laravel-modules** |
|-------------|---------------------|
| 5.4         | ^1.0                |
| 5.5         | ^2.0                |
| 5.6         | ^3.0                |
| 5.7         | ^4.0                |
| 5.8         | ^5.0                |
| 6.0         | ^6.0                |
| 7.0         | ^7.0                |
| 8.0         | ^8.0                |
| 9.0         | ^9.0                |
| 10.0        | ^10.0               |

`laravel-kit/modules` is a Laravel package which created to manage your large Laravel app using modules. Module is like a Laravel package, it has some views, controllers or models. This package is supported and tested in Laravel 10.

This package is a re-published, re-organised and maintained version of [pingpong/modules](https://github.com/pingpong-labs/modules), which isn't maintained anymore. This package is used in [AsgardCMS](https://github.com/AsgardCms).

With one big added bonus that the original package didn't have: **tests**.

Find out why you should use this package in the article: [Writing modular applications with laravel-modules](https://nicolaswidart.com/blog/writing-modular-applications-with-laravel-modules).

## Install

To install through Composer, by run the following command:

``` bash
composer require laravel-kit/modules
```

The package will automatically register a service provider and alias.

Optionally, publish the package's configuration file by running:

``` bash
php artisan vendor:publish --provider="LaravelKit\Modules\ModulesServiceProvider"
```

### Autoloading

By default, the module classes are not loaded automatically. You can autoload your modules using `psr-4`. For example:

``` json
{
  "autoload": {
    "psr-4": {
      "App\\": "app/",
      "Modules\\": "Modules/",
      "Database\\Factories\\": "database/factories/",
      "Database\\Seeders\\": "database/seeders/"
  }

}
```

**Tip: don't forget to run `composer dump-autoload` afterwards.**

## Documentation

You'll find installation instructions and full documentation on [https://docs.laravelmodules.com/](https://docs.laravelmodules.com/).

## Community

We also have a Discord community. [https://discord.gg/hkF7BRvRZK](https://discord.gg/hkF7BRvRZK) For quick help, ask questions in the appropriate channel.

## Credits

- [Nicolas Widart](https://github.com/nwidart)
- [David Carr](https://github.com/dcblogdev)
- [gravitano](https://github.com/gravitano)
- [All Contributors](../../contributors)

## About Nicolas Widart

Nicolas Widart is a freelance web developer specialising on the Laravel framework. View all my packages [on my website](https://nwidart.com/), or visit [my website](https://nicolaswidart.com).

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
