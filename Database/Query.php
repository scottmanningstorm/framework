<?php 

class Query
{
	protected $db;

	public function __construct() 
	{	
		$this->db = Connection::GetInstance(); 
	}	

	/**
	 * Processes a query and binds any params to the query.  
	 *
	 * @access public
	 * @param string $query 
	 * @param array $binds
	 * @return PDO Object 
	 */
	public function process($query, $binds = array())  
	{	
		$query_ = $this->db->prepare($query); 
		
		$query_ = $this->bindParams($query_, $binds);

		$query_->execute();

		return $query_; 
	}

	/**
	 * Binds any parameters to our query statment. 
	 *
	 * @access public 
 	 * @param Mixed $params 
	 * @param String $query
	 * @return String  
	 */
	public function bindParams($query, $params = array()) 
	{
			
		foreach ($params as $key => $param) {
			
			$query = $query->bindParam(':'.$key, $param, $this->getPdoDataType($param)); 
		
		}
 
		return $query; 
	}

	/**
	 * Takes a parameter and returns it's datatype for binding values to our query. 
	 *
	 * @access private
	 * @param Mixed $param
	 * @return 
	 */
	private function getPdoDataType($param) 
	{
		$return_type;  
		
		$param = gettype($param);

	 	switch($param)
	 	{
	 		default: 
	 		{
	 			return PDO::PARAM_STR; 
	 		}
	 		
	 		case 'boolean' : 
	 		{
	 			return PDO::PARAM_BOOL;  
	 		}
	 		
	 		case 'string' :
	 		{
	 			return PDO::PARAM_STR;  
	 		}
	 		
	 		case 'double' :
	 		{
	 			return PDO::PARAM_STR;  
		 	}
		 	
		 	case 'integer' :
	 		{
	 			return PDO::PARAM_INT;  
		 	}
	 	} 
	}

	/**
	 * Takes a query and any parameters to bind to query and returns an associative array.
	 *
	 * @access public 
	 * @param String $query
	 * @param MixedArray $binds 
	 * @return Associative array
	 */
	public function getAssoc($query, $params=array()) 
	{
		$results = $this->process($query, $params); 

		$results = $results->fetchAll();

		return $results; 
	}

	/**
	 * Takes a query and any parameters to bind and returns an object containing any results. 
	 *
	 * @access public
	 * @param String $query 
	 * @param MixedArray $binds
	 * @return Object
	 */
	public function getObj($query, $params=array()) 
	{
		$results = $this->process($query, $params); 

		$results = $results->fetch(PDO::FETCH_OBJ);

		return $results; 
	}

}

?>