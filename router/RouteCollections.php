<?php 

class RouteClient
{

	protected $method; 
	
	protected $controller; 
	
	protected $action; 
	
	public function __construct($method, $controller, $action)
	{
		$this->method = $method; 
		$this->controller = $controller; 
		$this->action = $action; 
	}
	
	public function extractUri($uri)
	{
			
	}
	
	public function extractaction($action)
	{
	
	}
	
}

?> 