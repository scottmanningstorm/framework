<?php 

class DatabaseConnection extends DB
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
			self::$instance = new DatabaseConnection();
			if (self::Connect()) {
				throw new exception('Error connection to database');
			}
		}

		return self::$instance; 
	}
		
	public static function Connect() 
	{
		return new PDO(self::$db_driver.':host='.self::$db_host.';dbname='.self::$db_name, self::$db_user, self::$db_password);
	}

	public function SetUpConnection($settings)
	{
		self::$db_name = $settings['db_name'];
		self::$db_host = $settings['db_host'];
		self::$db_user = $settings['db_user'];
		self::$db_password = $settings['db_password'];
		self::$db_driver = $settings['db_driver'];
	}
}

?> 
