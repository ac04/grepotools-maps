<?php 
	
	class Model_Island extends Orm\Model {

		protected static $_properties = array(
			'id',
			'x',
			'y',
			'type',
			'available_towns',
			'towns',
			'world',
			'market'
		);

		protected static $_has_many = array(
			'towns' => array(
				'key_from' => ''
			)
		);
		protected static $_has_one = array('...');

	}

 ?>