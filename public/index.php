<?php
	
	require_once("../code/classes/classes.php");
	$root = new Grepotools();
	
	if (isset($_GET['view']) && isset($_GET['controller'])) {
		$controller = "Controller_".ucfirst($_GET['controller']);
		$action = "action_".$_GET['view'];
		
		if (method_exists ($controller, $action)) {
			if (isset($_GET['data']) && $_GET['data']) {
				$controller::$action($_GET['data']);
			} else {
				$controller::$action();
			}
			
		} else {
			Director::error_404();	
		}
	} elseif (($_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']) == str_replace(array("http://", "https://"), "", Grepotools::$config->base_url."/")) {
		//Director::error_404();

		Grepotools::home();
	} else {
		Director::error_404();
	}


?>