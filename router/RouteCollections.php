<?php 

class RouteCollections 
{

	protected $routes = array(); 

	public function __construct() 
	{
 
	}
	
	public function addRouteToCollection($server_method, $action, $params)
	{
		RoutesBuilder::buildRoute($server_method, $action, $params = array());
	}

	public function addMethod($server_method) 
	{
		//$this->methods = $server_method; 
	}

	public function addUri($uri)
	{
		//$this->uri = $uri; 
	}

	public function addAction($action)
	{
		//$this->action = $action; 
	}
}

?> 