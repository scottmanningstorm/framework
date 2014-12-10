<?php 

class RouteClient
{
	protected $server_method; // POST or GET

	public $match_uri; 

	protected $method; // Function method 

	protected $controller; 

	protected $params = array(); 

	public function __call($method, $args) 
	{
		if (method_exists($this->extract_uri, $method)) {
			return $this->extract_uri->{$method}(implode('', $args));
		} 
		//else throw new exception	
	}

	public function __construct($server_method, $uri, $action) 
	{	
		$this->extract_uri = new ExtractUri(); 

		$this->server_method = $server_method; 

		$this->match_uri = $uri; 
		
		$this->method = $this->extractAction($action, 0); 

		$this->controller = $this->extractAction($action, 1); 
		
		$this->params = $this->extractParams($uri);
	}

	public function extractAction($action, $return_array_element, $delimiter = '@') 
	{
		$action = explode($delimiter, $action); 

		return $action[$return_array_element]; 
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

	/**
     * gets the method. (GET or POST)
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
	public function getMatchUri() 
	{
		return $this->match_uri; 
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