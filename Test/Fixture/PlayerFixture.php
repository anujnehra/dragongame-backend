<?php
/**
 * Player Fixture
 */
class PlayerFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'fullname' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8mb4_0900_ai_ci', 'charset' => 'utf8mb4'),
		'email' => array('type' => 'string', 'null' => false, 'default' => null, 'key' => 'unique', 'collate' => 'utf8mb4_0900_ai_ci', 'charset' => 'utf8mb4'),
		'password' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8mb4_0900_ai_ci', 'charset' => 'utf8mb4'),
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

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'fullname' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'status' => 1,
			'token' => 'Lorem ipsum dolor sit amet',
			'created_at' => 1601630734,
			'updated_at' => 1601630734
		),
	);

}
