<?php
/**
 * Created by PhpStorm.
 * User: mitch
 * Date: 2018-11-12
 * Time: 10:12
 */

namespace Elderbraum\LaraSingleWoo;

use Automattic\WooCommerce\Client;
use Elderbraum\LaraSingleWoo\Traits\Customer;

class LaraSingleWoo
{
	use Customer;
	/**
	 * @var $_wc  \Automattic\WooCommerce\Client
	 */
	private $_wc = null;
	
	public function construct() : void
	{
		$this->setWC();
	}
	
	/**
	 *
	 * @deprecated
	 * @return array
	 */
	public function index()
	{
		if( !$this->_wc ) 
			$this->connect();
		return $this->_wc->get('');
	}
	
	/**
	 * Returns an array of objects from the WC api
	 *
	 * @return array
	 */
	public function getProducts($params = [])
	{
		if( !$this->_wc ) 
			$this->connect();
		return $this->_wc->get('products', $params);
	}
	
	/**
	 * Returns an object with specified id.
	 *
	 * @param int $product_id
	 * @param array $params
	 * @return array
	 */
	public function getProduct($product_id = null, $params = [])
	{
		if( !$this->_wc ) 
			$this->connect();
		return $this->_wc->get("products/{$product_id}", $params);
	}

	public function getCoupons($params = [])
	{
		if( !$this->_wc ) 
			$this->connect();
		return $this->_wc->get('coupons', $params);
	}
	
	public function getCoupon($coupon_id = null, $params = [])
	{
		$args = $params;
		$args['id'] = $coupon_id;
		return $this->getCoupons($args);
	}


	public function connect()
	{
		$this->setWC();
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
	
	protected function checkConfig()
	{
		if( !config('larasingle.url')) return false;
		if( !config('larasingle.key')) return false;
		if( !config('larasingle.secret')) return false;
		if( !config('larasingle.wp_api')) return false;
		if( !config('larasingle.version')) return false;
		if( !config('larasingle.query_string_auth')) return false;
		
		
		return true;
	}
}