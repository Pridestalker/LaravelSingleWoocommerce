<?php
/**
 * Created by PhpStorm.
 * User: mitch
 * Date: 2018-11-12
 * Time: 10:12
 */

namespace Elderbraum\LaraSingleWoo;

use Automattic\WooCommerce\Client;

class LaraSingleWoo
{
	
	/**
	 * @var $_wc  \Automattic\WooCommerce\Client
	 */
	private $_wc = null;
	
	public function construct() : void
	{
		if( !$this->_wc )
		{
			$this->_wc = new Client(
				config('larasingle.url'),
				config('larasingle.key'),
				config('larasingle.secret'),
				[
					'wp_api'                =>  config('larasingle.wp_api'),
					'version'               =>  config('larasingle.version'),
					'query_string_auth'     =>  config('larasingle.query_string_auth')
				]
			);
		}
	}
	
	public function index()
	{
		$this->setWC();
		return $this->_wc->get('');
	}
	
	public function products(  )
	{
	
	}
	
	protected function setWC()
	{
		if( !$this->_wc )
		{
			$this->_wc = new Client(
				config('larasingle.url'),
				config('larasingle.key'),
				config('larasingle.secret'),
				[
					'wp_api'                =>  config('larasingle.wp_api'),
					'version'               =>  config('larasingle.version'),
					'query_string_auth'     =>  config('larasingle.query_string_auth')
				]
			);
		}
	}
	
}