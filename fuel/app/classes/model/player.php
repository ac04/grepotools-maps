<?php 
	
	class Model_Player extends Orm\Model {

		protected static $_properties = array(
			'id',
			'player_id', 
			'name', 
			'alliance', 
			'points',
			'rank',
			'towns',
			'world',
			'market'
		);

		protected static $_has_many = array('towns');
		protected static $_has_one = array('alliance');

	}

 ?>