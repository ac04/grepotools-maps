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
			'oda',
			'odt',
			'odd',
			'world',
			'market'

		);

		protected static $_has_many = array(
			'towns' => array(
				'key_from' => 'player_id',
				'model_to' => 'Model_Town',
				'key_to' => 'player_id',
				'cascade_save' => true,
				'cascade_delete' => false
			)
		);
		protected static $_has_one = array(
			'alliance' => array(
				'key_from' => 'alliance',
				'model_to' => 'Model_Alliance',
				'key_to' => 'alliance_id',
				'cascade_save' => true,
				'cascade_delete' => false
			), 
			'oda' => array(
				'key_from' => 'player_id',
				'model_to' => 'Model_PlayerOD',
				'key_to' => 'player_id',
				'cascade_save' => true,
				'cascade_delete' => false
			),
			'odd' => array(
				'key_from' => 'player_id',
				'model_to' => 'Model_PlayerOD',
				'key_to' => 'player_id',
				'cascade_save' => true,
				'cascade_delete' => false
			),
			'odt' => array(
				'key_from' => 'player_id',
				'model_to' => 'Model_PlayerOD',
				'key_to' => 'player_id',
				'cascade_save' => true,
				'cascade_delete' => false
			)
		);

	}

 ?>