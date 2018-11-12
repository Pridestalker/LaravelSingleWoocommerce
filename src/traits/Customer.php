<?php

namespace Elderbraum\LaraSingleWoo\Traits;

trait Customer
{
	public function getCustomers($params = [])
	{
		(new parent())->connect();
		return $this->_wc->get('customers', $params);
	}
}