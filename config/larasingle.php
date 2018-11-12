<?php
/**
 * Created by PhpStorm.
 * User: mitch
 * Date: 2018-11-12
 * Time: 09:40
 */

return [
	
	/*
	 |--------------------------------------------------------------------------
	 | LaraSingle WooCommerce Connector Settings
	 |--------------------------------------------------------------------------
	 |
	 | These are the basic settings for the laravel connection to a single access
	 | point.
	 |
	 */
	'url'               =>  env('API_TARGET', null),
	
	'key'               =>  env('API_CONSUMER_KEY', null),
	
	'secret'            =>  env('API_CONSUMER_SECRET', null),
	
	'wp_api'            =>  true,
	
	'version'           =>  'wc/v2',
	
	'query_string_auth' =>  false,
];