<?php 

/**
* 
*/
class Config
{
	public $db = null;
	public $base_url = null;



	function __construct()
	{
		session_start();
		error_reporting(E_ALL);


		$this->db = array(
			"host" => "mysql:dbname=grepotools_new;host=127.0.0.1", 
			"username" => "root",
			"password" => "pass"
		);
		$this->base_url = "http://localhost/grepotools-maps/public";
		$this->base_path = "localhost/grepotools-maps/public";
	}
}


 ?>