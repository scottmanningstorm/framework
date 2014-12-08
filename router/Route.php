<?php 

class Route
{
	protected static $instance = null;
	
	public static function getRouter()
	{
		if (self::$instance == null) { 
		
			self::$instance = new Router(); 
		
		}
		
		return self::$instance; 
	}  
	
	public function post($uri, $action)
	{
		self::getRouter()->post($uri, $action); 
	}
	
	public function get($uri, $action)
	{
		self::getRouter()->get($uri, $action); 
	}
	
	public function startRouting()
	{
		self::getRouter()->matchCurrentRoute();
	}
}