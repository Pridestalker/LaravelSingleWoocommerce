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
		return parent::connect()->get('products', $params);
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
		$args = $params;
		$args['id'] = $product_id;
        return parent::connect()->get('products', $args);
	}
}