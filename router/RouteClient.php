<?php 

class RouteClient
{
	protected $server_method; 

	protected $match_uri; 

	protected $method; 

	protected $controller; 

	protected $params = array(); 

	public function __construct($server_method, $uri, $action) 
	{	
		$this->server_method = $server_method; 

		$this->match_uri = $uri; 
		
		$this->method = $this->extractMethod($action); 
		
		$this->controller = $this->extractController($action); 

		$this->params = $this->matchParams(); 
	}

	public function extractMethod($action, $delimiter = '@') 
	{
		$action = explode($delimiter, $action); 
  
		return $action[1]; 
	}

	public function extractController($action, $delimiter = '@') 
	{
		$action = explode($delimiter, $action); 

		//$action = str_replace('Controller', '', $action[0]); 
		
		return $action[0]; 
	}

	public function extractParams($uri) 
	{
		//Uri must be in style of 	/Home/index/{id}/{title}
		$uri = preg_match('/\{.*\}/', $uri, $match);
		
		if (!!$match) { 
			$uri = preg_replace('/\{/', '', $match); 
			$uri = preg_replace('/\}/', '', $uri);
			$uri = explode('/', $uri[0]);

			return $uri; 
		}

		return false; 
	}

	public function getUriParams()
	{	
		// Returns an array of all params from URI. 
		$uri = $_SERVER['REQUEST_URI'];

		$uri = explode('/', $uri); 
		
		// First element of uri array will be blank and 2nd will be site root. 
		unset($uri[0]);  
		unset($uri[1]); 

		// 2nd two array elements will be 'Controller/Method'
		array_shift($uri); 
		array_shift($uri); 

		return $uri;
	}

	public function matchParams() 
	{
		// Matches any params passed via ROUTE::post($uri, $aciton) with the servers URI and builds an assoc array 
		$route_params = $this->extractParams($this->match_uri);
 
		$uri_params = $this->getUriParams(); 

		return $this->buildAssocArray($route_params, $uri_params);  	
	}

	public function setParams($values, $expected_values) 
	{
		$array = array(); 
		$i=0;  
		foreach ($values as $key => $value) {
			$array[$expected_values[$i]] = $values;
			$i++;
		}
	}

	public function buildAssocArray($array_keys, $array_values)
	{
		//we are trying to merge two arrays into 1 -> what if we have different numbers..... 
		$array = array();
		// Build up our keys
		$i=0;
		foreach($array_values as $value)
		{
			$array[$array_keys[$i]] = $value; 
			$i++;
			if ($i === count($array_keys)) {
				return $array; 
			}
		}
		return $array; 
	}

	/**
     * gets the server method. (GET or POST)
     *
     * @return string
     */
	public function getServerMethod() 
	{
		return $this->server_method; 
	}
	
	/**
     * gets the method function. 
     *
     * @return string
     */
	public function getMethod() 
	{
		return $this->method; 
	}

	/**
     * gets the action (method function)
     *
     * @return string
     */
	public function getAction() 
	{
		return $this->action; 
	}

	/**
     * gets the match uri.
     *
     * @return string
     */
	public function getMatchUri($strip_params = false) 
	{		 
		if(!$strip_params) {
			return $this->match_uri;
		} else {
			return $this->stripParamsFromUri($this->match_uri);
		}
	}

	public function stripParamsFromUri($uri)
	{	
		$uri = preg_replace('/\{.*\}/', '', $uri);
		$param_names = explode('/', $uri); 
		
		return $uri; 	
	}

	/**
     * gets the controller.
     *
     * @return string
     */
	public function getController() 
	{
		return $this->controller; 
	}

	/**
     * gets the parameters.
     *
     * @return array
     */
	public function getParams() 
	{	
		return $this->params; 
	}

}

?>

