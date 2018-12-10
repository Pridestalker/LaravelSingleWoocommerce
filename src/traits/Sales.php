<?php

namespace Elderbraum\LaraSingleWoo\Traits;

trait Sales
{
    public function getTotalSales($params = [])
	{
        $this->connect();
		return $this->WC()->get('reports/sales', $params);
	}

    public function getTopSales($params = [])
    {
        $this->connect();
        return $this->WC()->get('reports/top_sellers', $params);
    }
	abstract function connect();
	/**
	 * @return \Automattic\WooCommerce\Client::class
	 */
	abstract function WC();
}