<?php 

abstract class BaseController
{	
	public function renderView($filePath)
	{	
		$path = 'app/View/';
		$ext = '.php'; 
 
		if (is_readable($path.$filePath.'.php')) {
			return include ($path.$filePath.$ext); 
		} 
	}

}

?>