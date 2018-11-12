<?php

namespace Elderbraum\LaraSingleWoo\Traits;

trait Customer
{
	public function getCustomers($params = [])
	{
		return parent::connect()->get('customers', $params);
	}
}