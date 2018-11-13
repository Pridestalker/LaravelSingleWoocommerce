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
        $this->connect();
		return $this->WC()->get("orders/{$order_id}", $params);
    }
        
	abstract function connect();

	abstract function WC();
}