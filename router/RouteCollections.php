<?php 

class RouteCollections 
{

	protected $routes = array(); 
	
	protected $methods;

	protected $uri; 
	
	protected $actions; 

	protected $num_of_routes; 

	public function __construct() 
	{
		$this->num_of_routes = 0; 
	}
/*
	public function addRoute($method, $action, $params)
	{
		$this->routes[$method][$action] = $params;  
		$this->addMethod($method);
		$this->addParams($params);
		$this->addAction($action);
	}
*/
	public function addRoute($method, $action, $params)
	{
		$this->addMethod($method);
		$this->addParams($params);
		$this->addAction($action);
		$this->num_of_routes++; 
	}

	public function addMethod($method) 
	{
		$this->methods = $method; 
	}

	public function addUri($uri)
	{
		$this->uri = $uri; 
	}

	public function addAction($action)
	{
		$this->action = $action; 
	}
}

?> 