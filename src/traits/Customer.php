<?php

namespace Elderbraum\LaraSingleWoo\Traits;

trait Customer
{
	public function getCustomers($params = [])
	{
		if( !$this->_wc ) 
			parent::connect();
		return $this->_wc->get('customers', $params);
	}
}