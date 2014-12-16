<?php 

class ObjectWriterFactory
{	
	// Returns an object builder object based on the $objWriter value.
	// If null we build a JSON object writer by default
	public static function buildObj($query_string, ObjectWriterInterface $Objwriter = null)
	{	
		parse_str($_SERVER['QUERY_STRING'], $query_string); 

		if ($query_string['return_format'] == null) {
			$objWriter = new JsonObjWriter(); 	
		} else {

			$format = $query_string['return_format'];
			
			$format = strtolower($format); 
			
			$format = Ucwords($format);

			$class = $format.'ObjWriter';
			
			$objWriter = new $class();
		}

		return $objWriter->sendObj($query_string);

	} 

}

?>