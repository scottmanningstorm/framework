<?php

class Autoloader
{
	public static function loadFile($file_name)
	{	
		$paths = include('System/SystemPaths.php');
		
		$file_ext = '.php'; 

		foreach ($paths as $path) {
	 		if (is_readable($path . $file_name . $file_ext)) {
				include($path . $file_name . $file_ext);
			}
		}
		  

		//echo 'autoloading.... method =  ' . __METHOD__ . 'class = ' . __CLASS__ . 'line number' . __LINE__;
		//is_readable -- wil check if file exsits as well as readable.
	}

	public static function Autoload() 
	{
		spl_autoload_register(array(__CLASS__, 'loadFile'));
	}
}
 

?>