<?php 

class RouteClientBuilder 
{
	public static function buildRouteClient($method, $uri, $action) 
	{
		return new RouteClientBuilder($method, $uri, $controller)
	}
	
	private function getController($uri)
	{
		
		return $controller; 
	}
	
	private function getAction($uri)
	{
		
		return $action; 
	}
}

?> 