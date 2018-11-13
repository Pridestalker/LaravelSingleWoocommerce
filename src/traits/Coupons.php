<?php
namespace Elderbraum\LaraSingleWoo\Traits;

trait Coupons
{
	public function getCoupons($params = [])
	{
        $this->connect();
		return $this->WC()->get('coupons', $params);
	}
	
	public function getCoupon($coupon_id = null, $params = [])
	{
		$args = $params;
        $args['id'] = $coupon_id;
        $this->connect();
		return $this->WC()->get('coupons', $args);
    }
    
	abstract function connect();

	abstract function WC();
}