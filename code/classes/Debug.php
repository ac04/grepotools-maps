<?php 

	/**
	* This is the debug class, which will allow for user friendly error messages and error logging, along with debugging information when developing
	*/
	class Debug extends Grepotools
	{
		
		public static function dump($val)
		{
			echo "<pre>";
			var_dump($val);
			echo "</pre>";
		}
	}
 ?>