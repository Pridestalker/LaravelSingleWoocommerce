<?php
namespace Elderbraum\LaraSingleWoo\Traits;

trait Coupons
{
	public function getCoupons($params = [])
	{
		return parent::connect()->get('coupons', $params);
	}
	
	public function getCoupon($coupon_id = null, $params = [])
	{
		$args = $params;
		$args['id'] = $coupon_id;
		return parent::connect()->get('coupons', $args);
	}
}