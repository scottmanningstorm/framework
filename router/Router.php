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
			echo 'Route collection match uri = ' . $route->match_uri .'<br />'; 
			echo 'This uri = ' . $this->getUri() . '<br />';
			if ($route->match_uri == $this->getUri())
			{	 
				die('We have a match! - Router.php - Line:  26');
				ControllerFactory::build($route->getController(), $route->getMethod(), $route->getParams());
			}
		}
	}
	
	public function getUri($removeParams = false) 
	{	
		$uri = $_SERVER['REQUEST_URI'];
		
		if ($removeParams) {
			$uri = preg_replace('/\{.*\}/', '', $uri); 
		}

		$uri = explode('/', $uri); 
		
		//First element of uri array will be blank and 2nd will be site root. 
		unset($uri[0]);  
		unset($uri[1]); 

		$uri = '/'. implode('/', $uri); 
		
		return $uri;
	}
}
?> 