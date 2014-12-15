<?php 

class Route
{
	public static $router = null; 

	public static function getRouter() 
	{
		if (self::$router == null) {
			self::$router = new Router();  
		}
		return self::$router; 
	}
	
	private function __construct() {}
	private function __clone() {}

	public static function Get($uri, $action) 
	{
		self::getRouter()->addRouteToCollection("GET", $uri, $action);
	}
	
	public static function post($uri, $action)
	{
		self::getRouter()->addRouteToCollection("POST", $uri, $action);
	}

	public static function matchRoute() 
	{
		self::getRouter()->matchRoute(); 
	}
}