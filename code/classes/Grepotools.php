<?php 

/**
* This is the base class that everything must extend, it contains the database connection
*/
class Grepotools
{
	public static $db;
	public static $config;
	public static $lang;
	function __construct()
	{
		self::$config = new Config();
		self::$db  = new PDO(self::$config->db['host'], self::$config->db['username'], self::$config->db['password']); 


		self::$lang = new Language(array(
			"language" => User::get()->getVal("language")
		)); 
		# code...
	}
	public static function home() {

		Director::render('default/header', array(
			'page_title' => 'Home',
			'fluid-layout' => true
		));
		Director::render('default/navbar');
		Director::render('grepotools/home');
	}
}


 ?>