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
        $this->connect();
		return $this->WC()->get('products', $params);
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
        $this->connect();
        return $this->WC()->get("products/{$product_id}", $params);
    }

	abstract function connect();

	abstract function WC();
}