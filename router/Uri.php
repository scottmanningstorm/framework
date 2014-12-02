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
		$this->route = new Route();
		
		$this->uri = new Uri(); 
		
	}

	public function extractUri() 
	{
		$this->uri = explode('/', $_SERVER['REQUEST_URI'] );
		
		array_shift($this->uri);
		array_shift($this->uri);

		$this->setController($this->uri[0]); 		

		if (isset($this->uri[1])) {
			$this->setMethod($this->uri[1]); 
		}

		$this->setParams($this->extractParams());  

		return $this->uri; 
	}
}
?> 