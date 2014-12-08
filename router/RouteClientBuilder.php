<?php 

class RouteClientBuilder 
{
	public static function buildRouteClient($method, $uri, $action) 
	{
		return new RouteClient($method, $uri, self::splitControllerAction($action)[0],  self::splitControllerAction($action)[1]); 
	}
	
	private function splitControllerAction($action, $delimiter = '@')
	{
		$uri = explode($delimiter, $action); 
		
		return $uri; 
	}
}

?> 