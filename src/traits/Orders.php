<?php
namespace Elderbraum\LaraSingleWoo\Traits;

trait Orders
{
    public function getOrders($params = [])
	{
        $this->connect();
		return $this->WC()->get('orders', $params);
	}
	
	public function getOrder($order_id = null, $params = [])
	{
		$args = $params;
        $args['id'] = $order_id;
        $this->connect();
		return $this->WC()->get('orders', $args);
    }
        
	abstract function connect();

	abstract function WC();
}