<?php 

class ActiveRecord
{
	public $query;

	protected $grammer;  

	protected $query_builder; 

	public function __construct() 
	{
		$this->query = new Query();

		$this->grammer = new SelectGrammer(); 

		$this->query_builder = new QueryBuilder(); 
	}

	public function update($value, $id=null) 
	{
		
	}	

	public function find($id) 
	{
		
	}

	public function delete($id) 
	{
		
	}

	public function insert($values, $id) 
	{
		
	}

	/**
	 * If we try to call a method which does no exsit 
	 * try to call it from Grammer
	 * @access 
	 * @param 
	 * @return  
	 */
	public function __call($method, $params) 
	{
		if (method_exists($this->query_builder, $method)) {

			$this->grammer->{$method}($params); 

		}
	}
}

?>