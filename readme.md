# Laravel Explicit

This package adds a "explicit" validation rule which check for profanity and any words you want to add to check against!

## Installation

This package can be used in Laravel 7.0 or higher.

You can install the package via composer:

```
composer require mbozwood/laravel-explicit-filter
```

In Laravel 5.5 the service provider will automatically get registered. For older versions of the framework, add the service provider in config/app.php file:

```
'providers' => [
    // ...
    MBozwood\LaravelExplicitFilter\ExplicitServiceProvider::class,
];
```

## Usage

For all languages use the following

```php
'field_name' => 'explicit'
```

## Configuration

To publish the configuration file to `config/explicit.php`

```
php artisan vendor:publish --provider="mbozwood\LaravelExplicitFilter\ExplicitServiceProvider"
```

Be sure to add a validation message to your `validation.php` file

```php
'explicit' => 'The :attribute cannot contain explicit words or terms.',
```
