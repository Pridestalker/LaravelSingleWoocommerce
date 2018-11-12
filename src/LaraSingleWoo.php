<?php
/**
 * Created by PhpStorm.
 * User: mitch
 * Date: 2018-11-12
 * Time: 10:12
 */

namespace Elderbraum\LaraSingleWoo;

use Elderbraum\LaraSingleWoo\Traits\Customer;


class LaraSingleWoo extends LaraWoo
{
	use Customer;

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



}