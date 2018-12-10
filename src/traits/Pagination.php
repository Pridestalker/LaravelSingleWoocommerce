<?php
/**
 * Created by PhpStorm.
 * User: mitch
 * Date: 2018-12-10
 * Time: 11:37
 */

namespace Elderbraum\LaraSingleWoo\Traits;


trait Pagination {
	
	public $request;
	
	public $response;
	
	public function setHeaders() {
		$this->request = $this->WC()->http->getRequest();
		$this->response = $this->WC()->http->getResponse();
	}
	/**
	 * @return \Automattic\WooCommerce\Client::class
	 */
	abstract function WC();
}