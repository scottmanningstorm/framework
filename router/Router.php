<?php 

class Router
{
	protected $uri; 
	
	public $collections = array(); 
	
	public function __construct() 
	{
		 $this->uri = new Uri();
	}
	
	public function post($uri, $action) 
	{
		$this->collections[] = RouteClientBuilder::buildRouteClient('POST', $uri, $action);
	}
	
	public function get($uri, $action) 
	{
		$this->collections[] = RouteClientBuilder::buildRouteClient('GET', $uri, $action);
	}
	
	public function matchCurrentRoute()
	{
		foreach($this->collections as $route)
		{	
			if ($route->getUri() === $this->uri->getUri()) {
				$this->loadController($route->action, $route->controller, $route->params);
				return true;
			}
		}
		return false; 
	}
	
	public function loadController($method, $controller, $params = null) 
	{
		ControllerFactory::build($method, $controller, $params);
	}
	
}
?> 