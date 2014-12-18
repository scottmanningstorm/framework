<?php 

class URI
{
	// Strips any unwanted forwardslash from the end of a given uri. 
	public static function stripCharFromStart($string, $character)
	{
		if ($string[0] == $character) {
			$string = substr($string, 1); 
		}
		return $string; 
	}

	// Strips any unwanted forwardslash from the end of a given uri. 
	public static function stripCharFromEnd($string, $character)
	{
		if ($string[strlen($string) - 1] == $character) {
			$string = substr($string, 0, strlen($string) - 1); 
		}
		return $string; 
	}

	// Strips any unwanted forwardslash from the end of a given uri.  
	public static function stripForwordSlashFromEnd($uri)
	{
		if ($uri !== '/') {
			$uri = self::stripCharFromEnd($uri, '/'); 
		}

		return $uri;  
	}

	// Strips any unwanted forwardslash from the end of a given uri. 
	public static function stripForwordSlashFromStart($uri)
	{
		if ($uri != '/') {
			$uri = self::stripCharFromStart($uri, '/'); 
		}

		return $uri; 
	}
	// If no uri has been passed over use current URI. 
	public static function stripQueryString($uri=null)
	{	
		$uri = self::returnURI($uri); 

		$uri = explode('?', $uri); 
		
		return $uri[0]; 
	} 

	// We can pass in an optional URI to extract our query strings from. 
	// If we dont pass a URI our function will return query string from the current URI.
	public static function getUriQueryStrings($uri=null) 
	{	
		$uri = self::returnURI($uri); 

		$uri = explode('?', $uri);

		$uri = explode('&', $uri[1]);

		return $uri; 
	} 

	// Allows us to either return a custome URI or if no URI is passed as param then current URI is returned.  
	private static function returnURI($uri=null)
	{
		if ($uri == null) {
			$uri = $_SERVER['REQUEST_URI']; 
		}

		return $uri; 
	}

}

?> 