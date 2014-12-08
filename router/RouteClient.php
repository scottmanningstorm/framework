<?php 

class RouteClient
{

	public $method; 
	
	public $controller; 
	
	public $action; 
	
	public $uri; 
	
	public $params = array(); 
	
	public function __construct($method, $uri, $controller, $action)
	{
		$this->method = $method; 
		$this->controller = $controller; 
		$this->action = $action; 
		$this->uri = $uri; 
	}
	
	public function getUri() 
	{
		return $this->uri;
	}
	
}

?> 