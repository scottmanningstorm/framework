<?php 

class BlogController extends BaseController 
{
	public function index() 
	{
		$this->renderView('Blog/index');
	}
}

?>