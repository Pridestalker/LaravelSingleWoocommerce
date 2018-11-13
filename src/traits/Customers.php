<?php
namespace Elderbraum\LaraSingleWoo\Traits;

trait Customers
{
	public function getCustomers($params = [])
	{

		$this->connect();
		return $this->WC()->get('customers', $params);
	}

	public function getCustomer($customer_id = null, $params = [])
	{
		return $this->WC()->get("customers/{$customer_id}", $params);
	}

	abstract function connect();

	abstract function WC();
}