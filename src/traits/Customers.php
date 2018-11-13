<?php
namespace Elderbraum\LaraSingleWoo\Traits;

trait Customers
{
	public function getCustomers($params = [])
	{

		$this->connect();
		return $this->WC()->get('customers', $params);
		// return parent::connect()->get('customers', $params);
	}

	public function getCustomer($customer_id = null, $params = [])
	{
		$args = $params;
		$args['id'] = $customer_id;
		return $this->WC()->get('customers', $args);
		// return parent::connect()->get('customers', $args);
	}

	abstract function connect();

	abstract function WC();
}