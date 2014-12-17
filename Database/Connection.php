<?php 

class Connection 
{
	protected static $db_name; 

	protected static $db_host; 

	protected static $db_user; 

	protected static $db_password;

	protected static $db_driver; 

	private static $instance = null; 

	public static function GetInstance() 
	{
		if (self::$instance == null)
		{
			try { 
			
				$settings = include('System/dbSettings.php'); 

				self::$instance = self::Connect($settings); 
			
			}

			// *********************************************************************//
			// If we don't catch an exception thrown by the PDOException object 	// 
			// the default action taken by zend engine is to spit out a back trace  // 
 			// which is a secrity issue as full database connection detials 		//
			// such as user/password could possibly be revealed. 					//
			// http://php.net/manual/en/pdo.connections.php 						//
			catch (PDOException $error) { 
				die($error->getMessage()); 
			}

		}

		return self::$instance; 
	}
		
	public static function Connect($settings) 
	{	
		return new PDO($settings['db_driver'].':host='.$settings['db_host'].';dbname='.$settings['db_name'], $settings['db_user'], $settings['db_password']);
	}

	public static function SetConnectionSettings($settings)
	{	
		self::$db_name = $settings['db_name'];
		self::$db_host = $settings['db_host'];
		self::$db_user = $settings['db_user'];
		self::$db_password = $settings['db_password'];
		self::$db_driver = $settings['db_driver'];
	}
}

?> 
