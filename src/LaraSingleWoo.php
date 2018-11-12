<?php
/**
 * Created by PhpStorm.
 * User: mitch
 * Date: 2018-11-12
 * Time: 10:12
 */

namespace Elderbraum\LaraSingleWoo;

use Elderbraum\LaraSingleWoo\Traits\Customers;
use Elderbraum\LaraSingleWoo\Traits\Coupons;
use Elderbraum\LaraSingleWoo\Traits\Products;


class LaraSingleWoo extends LaraWoo
{
	use Customers,
		Coupons,
		Products;

	/**
	 *
	 * @return array
	 */
	public function index()
	{
		if( !$this->_wc ) 
			$this->connect();
		return $this->_wc->get('');
	}
}