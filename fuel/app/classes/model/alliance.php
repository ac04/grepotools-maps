<?php 
	
	class Model_Alliance extends Orm\Model {

		protected static $_properties = array(
			'id',
			'alliance_id',
			'name',
			'points',
			'towns',
			'members',
			'rank',
			'oda',
			'odd',
			'odt',
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
			'oda' => array(
				'key_from' => 'alliance_id',
				'model_to' => 'Model_AllianceOD',
				'key_to' => 'alliance_id',
				'cascade_save' => true,
				'cascade_delete' => false
			),
			'odd' => array(
				'key_from' => 'alliance_id',
				'model_to' => 'Model_AllianceOD',
				'key_to' => 'alliance_id',
				'cascade_save' => true,
				'cascade_delete' => false
			),
			'odt' => array(
				'key_from' => 'alliance_id',
				'model_to' => 'Model_AllianceOD',
				'key_to' => 'alliance_id',
				'cascade_save' => true,
				'cascade_delete' => false
			)

		);

	}

 ?>