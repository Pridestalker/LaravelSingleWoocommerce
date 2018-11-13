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

	abstract function WC();
}