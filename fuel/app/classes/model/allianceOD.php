<?php 
	
	class Model_AllianceOD extends Orm\Model {

		protected static $_properties = array(
			'rank',
			'points',
			'alliance_id',
			'type',
			'world',
			'market'
		);

		protected static $_belongs_to = array(
			'player' => array(
				'key_from' => 'alliance_id',
				'model_to' => 'Model_Alliance',
				'key_to' => 'alliance_id',
				'cascade_save' => true,
				'cascade_delete' => false
			)
		);
	}

 ?>