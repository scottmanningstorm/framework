<?php 

class ExtractUri
{	
	/*
	public function extractUri() 
	{
		$this->uri = explode('/', $_SERVER['REQUEST_URI'] );
		
		array_shift($this->uri);
		array_shift($this->uri);

		//$this->setController($this->uri[0]); 		

		if (isset($this->uri[1])) {
			$this->setMethod($this->uri[1]); 
		}

		//$this->setParams($this->extractParams());  

		return $this->uri; 
	}
	*/

	public function extractServerMethod($uri)
	{
		
	}

	public function extractParams($uri) 
	{
		 
	}

	public function extractController($uri) 
	{
				
	}

	public function extractRouteToAction($action, $delimiter = '@') 
	{
		$action = explode($delimiter, $action); 

		return $action[0]; 
	}
	
	public function extractRouteToController($action, $delimiter = '@') 
	{
		$action = explode($delimiter, $action); 

		return $action[1]; 
	}

}
?> 