<?php 
include ("RouteCollections.php"); 
class Route
{
	protected $routeCollections = array();
	
	public function __construct() 
	{
		$routeCollections = new RouteCollections();
	}
	
	public function test() 
	{
		echo "test from Route class;";
	}
	public function addGet($uri, $action) 
	{
		$this->addRouteToCollection("GET", $uri, $action);
	}
	
	public function addPost($uri, $action)
	{
		$this->addRouteToCollection("POST", $uri, $action);
	}
	
	public function addRouteToCollection($method, $uri, $action)
	{
		$this->routeCollections->setMethod($method);
		$this->routeCollections->setUri($uri); 
		$this->routeCollections->setAction($action); 	
	}
	
	public function getRouteCollections()
	{
		return $this->routeCollections; 
	}
}