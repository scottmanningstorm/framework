<?php 


class ControllerFactory 
{
	public static function build($className, $method, $params = array() )  
	{	
		if (class_exists($className)) {
			return call_user_func_array(array(new $className, $method), array($params) ); 
		} else {
			throw new Exception("no class found with the name" . $className); 
		}
	}
}

?> 