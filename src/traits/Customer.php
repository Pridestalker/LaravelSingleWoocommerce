<?php

namespace Elderbraum\LaraSingleWoo\Traits;

trait Customer
{
	public function getCustomers($params = [])
	{
		parent::connect();
		return parent::$_wc->get('customers', $params);
	}
}