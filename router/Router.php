<?php 
	
class Router
{
	protected $uri; 
	
	public $route_collection = array(); 
	
	public function __construct() 
	{

	}

	public function addRouteToCollection($server_method, $uri, $action)
	{
		$this->route_collection[] = new RouteClient($server_method, $uri, $action); 
	}
 
	public function matchRoute()
	{
		foreach($this->route_collection as $route) { 

			if ($route->getMatchUri() === $this->getUriString(true))
			{	  
				return ControllerFactory::build($route->getController(), $route->getMethod(), $route->getParams());
			}
		}
		// If we reach here we have not matched any routes - divert to error 404 
		ControllerFactory::build('ErrorController', 'index');
	}
	
	public function getUriString($remove_params)
	{
		// grabs uri and returns a string. 
		$uri = $_SERVER['REQUEST_URI'];
		
		if ($remove_params) {
			$uri = preg_replace('/\{.*\}/', '', $uri); 
		}

		$uri = explode('/', $uri); 
		
		// First element of uri array will be blank and 2nd will be site root. 
		unset($uri[0]);  
		unset($uri[1]); 

		$uri = '/'. implode('/', $uri); 		
		
		return $uri;
	}

}
?> 