<?php 
	
	class Model_PlayerOD extends Orm\Model {

		protected static $_properties = array(
			'rank',
			'points',
			'player_id',
			'type',
			'world',
			'market'
		);

		protected static $_belongs_to = array(
			'player' => array(
				'key_from' => 'player_id',
				'model_to' => 'Model_Player',
				'key_to' => 'player_id',
				'cascade_save' => true,
				'cascade_delete' => false
			)
		);
	}

 ?>