<?php 

class ErrorController extends BaseController 
{
	public function index() 
	{	
		$this->renderView('Error/Deadlink');
	}
}

?>