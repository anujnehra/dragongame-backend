<?php 
class AppSchema extends CakeSchema {

	public function before($event = array()) {
		return true;
	}

	public function after($event = array()) {
	}

	public $gameplays = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'player_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'result' => array('type' => 'enum(\'won\',\'lost\',\'giveup\')', 'null' => true, 'default' => null, 'collate' => 'utf8mb4_0900_ai_ci', 'charset' => 'utf8mb4'),
		'winner_health' => array('type' => 'integer', 'null' => false, 'default' => '10', 'unsigned' => false),
		'loser_health' => array('type' => 'integer', 'null' => false, 'default' => '10', 'unsigned' => false),
		'created_at' => array('type' => 'timestamp', 'null' => false, 'default' => null),
		'updated_at' => array('type' => 'timestamp', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8mb4', 'collate' => 'utf8mb4_0900_ai_ci', 'engine' => 'InnoDB')
	);

	public $players = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'fullname' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8mb4_0900_ai_ci', 'charset' => 'utf8mb4'),
		'email' => array('type' => 'string', 'null' => false, 'default' => null, 'key' => 'unique', 'collate' => 'utf8mb4_0900_ai_ci', 'charset' => 'utf8mb4'),
		'password' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8mb4_0900_ai_ci', 'charset' => 'utf8mb4'),
		'avatar' => array('type' => 'enum(\'a\',\'b\',\'c\',\'d\')', 'null' => true, 'default' => null, 'collate' => 'utf8mb4_0900_ai_ci', 'charset' => 'utf8mb4'),
		'status' => array('type' => 'tinyinteger', 'null' => false, 'default' => '1', 'unsigned' => false),
		'token' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8mb4_0900_ai_ci', 'charset' => 'utf8mb4'),
		'created_at' => array('type' => 'timestamp', 'null' => false, 'default' => null),
		'updated_at' => array('type' => 'timestamp', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'email' => array('column' => 'email', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8mb4', 'collate' => 'utf8mb4_0900_ai_ci', 'engine' => 'InnoDB')
	);

}
