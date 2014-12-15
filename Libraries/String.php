<?php 

class String
{
	// Strips any unwanted forwardslash from the end of a given uri 
	public static function stripCharFromStart($string, $character)
	{
		if ($string[0] == $character) {
			$string = substr($string, 1); 
		}
		return $string; 
	}

	// Strips any unwanted forwardslash from the end of a given uri 
	public static function stripCharFromEnd($string, $character)
	{
		if ($string[strlen($string) - 1] == $character) {
			$string = substr($string, 0, strlen($string) - 1); 
		}
		return $string; 
	}

	// Strips any unwanted forwardslash from the end of a given uri 
	public static function stripForwordSlashFromEnd($uri)
	{
		return self::stripCharFromEnd($uri, '/'); 
	}

	// Strips any unwanted forwardslash from the end of a given uri 
	public static function stripForwordSlashFromStart($uri)
	{
		return self::stripCharFromStart($uri, '/'); 
	}
}

?> 