<?php
namespace Elderbraum\LaraSingleWoo\Traits;

trait Products
{
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
}