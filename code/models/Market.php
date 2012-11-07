<?php


	/**
	* This model will allow for getting of market information, including settings
	*/
	class Market extends Grepotools
	{
		public function __construct() {

		}
		public static function getEnabled() {
			$query = self::$db->query("SELECT * FROM markets WHERE enabled=1");
			$query->execute();
			return $query->fetchAll(PDO::FETCH_CLASS, 'Market');

		}

		public static function get($market) {
			$query = self::$db->prepare("SELECT * FROM markets WHERE market=:market");
			$query->execute(array(":market" => $market));
			$results = $query->fetchAll(PDO::FETCH_CLASS, 'Market');
			if (count($results)) {
				return $results[0];
			}
		}

		public static function getCurrent() {
			$user = User::get();
			return $user->market;
		}

	}


?>