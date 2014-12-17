<?php 

class Query
{
	public function __construct() 
	{
		
	}

	public function rawQuery() 
	{
		
	}
	public function process() 
	{
		
	}

	/**
	 * Binds any parameters to our query statment. 
	 *
	 * @access public 
 	 * @param Mixed $params 
	 * @param String $query
	 * @return String  
	 */
	public function bindParams($params, $query) 
	{
		
	}

	/**
	 * Takes a query and any parameters to bind to query and returns an associative array.
	 *
	 * @access public 
	 * @param String $query
	 * @param MixedArray $binds 
	 * @return Associative array
	 */
	public function getAssoc($query, $params) 
	{
		
	}

	/**
	 * Takes a query and any parameters to bind and returns an object containing any results. 
	 *
	 * @access public
	 * @param String $query 
	 * @param MixedArray $binds
	 * @return Object
	 */
	public function getObj() 
	{
		
	}

	/**
	 *  
	 *
	 * @access 
	 * @param 
	 * @return  
	 */
	public function update() 
	{
		
	}

	/**
	 *  
	 *
	 * @access 
	 * @param 
	 * @return  
	 */
	public function insert() 
	{

	}	

	public function delete() 
	{
		
	}
}

?>