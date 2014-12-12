<?php 

class ControllerFactory 
{
	public static function build($className, $method, $params = array() )  
	{	
		if (class_exists($className)) { 
			return call_user_func_array(array(new $className, $method), array('df', 'as') ); 
		} else {
			call_user_func_array(array(new ErrorController, 'index'), array('df', 'as') ); 
			throw new Exception("no class found with the name " . $className);
		}
	}
}

?> 