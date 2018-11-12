<?php
namespace Elderbraum\LaraSingleWoo\Traits;

trait Customers
{
	public function getCustomers($params = [])
	{
		return parent::connect()->get('customers', $params);
	}
}