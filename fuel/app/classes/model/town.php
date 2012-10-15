<?php 
	
	class Model_Town extends Orm\Model {

		protected static $_properties = array(
			'id',
			'town_id',
			'player_id',
			'name',
			'x',
			'y',
			'number',
			'world',
			'points',
			'world',
			'market'
		);
		protected static $_belongs_to = array('player','island','alliance');

	}

 ?>