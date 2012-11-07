<?php 

/**
* 
*/
class Director extends Grepotools
{
	
	function __construct()
	{
		# code...
	}

	public static function render($view, $data = null, $assign = false) {
		$config = self::$config;
		$user = User::get();
		$lang = self::$lang;
		ob_start();
		// render template
		if (file_exists("../code/views/".$view.".php")) {
			include "../code/views/".$view.".php";
		} else {
			Debug::dump($view);
			include "../code/views/404.php";
		}
		$content = ob_get_clean();
		if ($assign) {
			return $content;
		} else {
			echo $content;
			
		}
		
	}

	public static function redirect($location) {
		header("Location: ". self::$config->base_url ."/$location");
	}
	public static function goHome() {
		header("Location: ".self::$config->base_url);
	}
	public static function error_404() {
		header("HTTP/1.0 404 Not Found");
		echo "404 page";
	}
	public static function isPage($page) {

		$currentPage = str_replace(self::$config->base_path, "", rtrim($_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'], "/"));

		if ($currentPage == $page) {
			echo "active";
		}
		

	}
} 

?>