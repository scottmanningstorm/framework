<?php 

class Uri
{	
	protected $method; 

	protected $controller; 

	protected $mehtod_func; 

	protected $params; 

	protected $uri; 
	
	public function __construct() 
	{
		$this->uri = $this->getUri();
	}
	
	public function getUri() 
	{
		$uri = $_SERVER['REQUEST_URI']; 
		
		
		$uri = explode('/', $uri); 
		
		array_shift($uri);
		
		array_shift($uri);
		
		$uri = '/'.implode('/', $uri); 
	 
		return $uri; 
	}

}

?> 