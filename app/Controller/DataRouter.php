<?php 

class DataRouter
{
	protected $data = array();

	public function getServerRequestData() 
	{
		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			
			$this->data = $_POST;
		
		} else if ($_SERVER['REQUEST_METHOD'] == "GET") {

			$this->data = $_GET;

		} 

		return $this->data; 
	}	

	public function getData() 
	{
		return $this->data; 
	}

	public function getReturnFormat() 
	{
		return $this->data['return_format'];
	}

}

?>