<?php 

include ("Route.php");

class Router
{
	protected $uri; 
	
	protected $route; 
	
	public function __construct() 
	{
		$this->route = new Route();
		
		$this->uri = new Uri(); 
		
	}

	public function matchCurrentRoute()
	{
		foreach($this->route->routeCollections->uri as $route) { 

		}
	}
	
	public function loadController() 
	{
		ControllerFactory::build($this->uri->controller, $this->uri->method, $this->controller->params);
	}
}
?> 