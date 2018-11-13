<?php

namespace Elderbraum\LaraSingleWoo;

use Automattic\WooCommerce\Client;

class LaraWoo
{
    /**
	 * @var $_wc  \Automattic\WooCommerce\Client
	 */
	protected $_wc = null;
	
	public function construct() : void
	{
		$this->setWC();
    }
    
    public function connect()
	{
		return $this->setWC();
		// return (new self())->setWC();
	}

	protected function setWC()
	{
		if( !$this->_wc )
		{
			$this->_wc = new Client(
				config('larasingle.url'),
				config('larasingle.key'),
				config('larasingle.secret'),
				[
					'wp_api'                =>  config('larasingle.wp_api'),
					'version'               =>  config('larasingle.version'),
					'query_string_auth'     =>  config('larasingle.query_string_auth')
				]
			);
        }
        
        return $this->_wc;
	}
	
	protected function checkConfig()
	{
		if( !config('larasingle.url')) return false;
		if( !config('larasingle.key')) return false;
		if( !config('larasingle.secret')) return false;
		if( !config('larasingle.wp_api')) return false;
		if( !config('larasingle.version')) return false;
		if( !config('larasingle.query_string_auth')) return false;
		
		
		return true;
	}

	protected function WC()
	{
		return $this->_wc;
	}
}