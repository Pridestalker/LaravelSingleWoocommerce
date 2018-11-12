<?php
/**
 * Created by PhpStorm.
 * User: mitch
 * Date: 2018-11-12
 * Time: 10:32
 */

namespace Elderbraum\LaraSingleWoo;


use Illuminate\Support\Facades\Facade;

class LaraSingleWooFacade extends Facade
{
	protected static function getFacadeAccessor()
	{
		return 'LaraSingleWoo';
	}
}