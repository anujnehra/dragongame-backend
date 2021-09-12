<?php
/**
 * Gameplay Fixture
 */
class GameplayFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
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

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'player_id' => 1,
			'result' => '',
			'winner_health' => 1,
			'loser_health' => 1,
			'created_at' => 1601632297,
			'updated_at' => 1601632297
		),
	);

}
