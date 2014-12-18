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
			
			// Match our server request method - making sure we compare with the same letter casing.
			$server_method = strtoupper($_SERVER['REQUEST_METHOD']);
			$route_method = strtoupper($route->getServerMethod());
	
			if ($route_method === $server_method) {
				
				$user_defined_route = URI::stripForwordSlashFromEnd($route->getMatchUri(true));
				
				$current_uri = URI::stripQueryString($this->getUriString(true));
				$current_uri = URI::stripForwordSlashFromEnd($current_uri); 
			
				if ($user_defined_route === $current_uri)
				{	  
					return ControllerFactory::build($route->getController(), $route->getMethod(), $route->getParams());
				}
			}
		}
		// If we reach here we have not matched any routes - divert to error 404 
		ControllerFactory::build('ErrorController', 'index');
	}
	
	public function getUriString($remove_params)
	{
		// grabs uri and returns a string. 
		$uri = $_SERVER['REQUEST_URI'];

		$uri = explode('/', $uri); 
		array_shift($uri);
		array_shift($uri);
		
		// we only need 0nth and 1nth element. Anyhting after element 0 & 1 will be params. 
		if (count($uri) > 1) { 
			$newUri[] = $uri[0]; 
			$newUri[] = $uri[1];
		} else {
			$newUri = $uri; 
		}

		$newUri = '/'. implode('/', $newUri); 		
		$newUri = URI::stripForwordSlashFromEnd($newUri); 
		return $newUri;
	}

	
}
?> 