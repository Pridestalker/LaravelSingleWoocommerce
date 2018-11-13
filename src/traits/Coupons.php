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
        $this->connect();
		return $this->WC()->get("coupons/{$coupon_id}", $params);
    }
    
	abstract function connect();

	abstract function WC();
}