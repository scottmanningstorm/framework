<?php 

class Paths 
{	
	public static function Root() 
	{	
		if (Application::getEnv() == 'local') {
			$prepend = 'localhost:'.$_SERVER['SERVER_PORT']; 
		}

		$root_dir = explode('/', $_SERVER['REQUEST_URI']);

		$root = 'http://'.$prepend.'/'.$root_dir[1].'/';
		
		return $root;
	
	}
}
?> 