<?php 

	/**
	* Language class, for getting details of language, and loading phrases
	*/
	class Language extends Grepotools
	{

		private $_language = null;
		
		function __construct($config)
		{
			if (!is_array($config)) {
				throw new InvalidArgumentException("Language configuration must be an array");
			}

			$this->_language = $config['language'];

			# code...
		}

		public function get( $phrase, $output = true ) {
			//TODO integrate memcache
			// if (in-memcache) {

			// } else {}

			//add to memcache
			$query = self::$db->prepare("SELECT text FROM language WHERE placeholder = :phrase AND lang = :language");

			$query->execute(array(":phrase" => $phrase, ":language" => $this->_language));
			$result = $query->fetchColumn();
			if ($output) {
				echo $result;
			}else {
				return $result;
			}

			
		}
		
	}

 ?>