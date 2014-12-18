<?php 

class ActiveRecord
{
	public $query;

	public function __construct() 
	{
		$this->query = new Query();
	}

	public function Update($value, $id=null) 
	{
		if ($this->query->process()) 
	}	

	public function Find($id) 
	{
		
	}

	public function Delete($id) 
	{
		
	}

	public function Insert($values, $id) 
	{
		
	}
}

?>