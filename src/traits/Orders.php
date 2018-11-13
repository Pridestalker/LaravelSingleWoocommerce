<?php
namespace Elderbraum\LaraSingleWoo\Traits;

trait Orders
{
    public function getOrders($params = [])
	{
		return parent::connect()->get('orders', $params);
	}
	
	public function getOrder($order_id = null, $params = [])
	{
		$args = $params;
		$args['id'] = $order_id;
		return parent::connect()->get('orders', $args);
	}
}