<?php 

class Application
{
	public static function Env($setting)
	{
		$env = strtolower($setting); 

		switch($env) {

			case 'dev':
			
			case 'development':
			
			case 'local': 	
			{
				error_reporting(E_ALL);   	     
				ini_set('display_errors', 1);    

				break; 
			} 
			
			case 'live': 
			{
				error_reporting(E_ALL);   	     
				ini_set('display_errors', 0);    

				break; 
			}

		}
	}
}

?>