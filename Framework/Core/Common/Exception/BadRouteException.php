<?php
namespace Framework\Core\Common\Exception;

use Exception;

class BadRouteException extends Exception
{
	public function testMessage(){
		return 'bad route';
	}
}