# LaraWoo Single connector

+ [LaraWoo Single connector](#larawoo-single-connector)
    + [Intro](#intro)
    + [Compatability](#compatability)
    + [Installation](#installation)
    + [Usage](#usage)


## Intro
This package is made to ease the use of the Automattic/WooCommerce API by using a single simplified API.

## Compatability
* This package is tested using Laravel 5.7
    * Other versions might work but are not tested as of now.
* This package is run using php 7.2
    * Other versions might work but are not tested as of now.

## Installation
Require this package via composer.

```sh
composer require elderbraum/larasinglewoo
```

Laravel 5.5 uses Package Auto-Discovery, so doesn't require you to manually add the ServiceProvider.

If you don't use auto-discovery, add the ServiceProvider to the providers array in `config/app.php`
```php
Elderbraum\LaraSingleWoo\ServiceProvider::class,
```

To add the facade to use the functions add the foloowing to your facades in `config/app.php`
```php
'LaraSingleWoo' => Elderbraum\LaraSingleWoo\LaraSingleWooFacade.php
```

copy the `larasinglewoo/config` files to your `config` with the following command
```sh
php artisan vendor:publish --provider="Elderbraum\LaraSingleWoo\ServiceProvider"
```
If you do not want to publish the config, you can also add the following lines to your `.env` file.
```env
API_TARGET="https://example.com"
API_CONSUMER_KEY="ck_xxxxxxxx"
API_CONSUMER_SECRET="cs_xxxxxxxx"
```

## Usage

You can now use the package. The supported calls are:

```php
LaraSingleWoo::getProducts() # Returns an object with all products
LaraSingleWoo::getProducts($product_id) # Returns the product on $product_id
```