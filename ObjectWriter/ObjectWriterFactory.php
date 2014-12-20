<?php 

class ObjectWriterFactory
{
	// Do we need to return a default object if no objecct is found or is it best to throw an error? 	
	public static function build($class_name)
	{
		$class_name = ucfirst($class_name);

		$class_name = $class_name.'ObjWriter'; 
		 
		if (class_exists($class_name)) {
			
			return new $class_name();

		} else {
			
			throw new Exception("No class found for ".$class_name.$e->getMessage());
		
		}
	
	}
}

?>