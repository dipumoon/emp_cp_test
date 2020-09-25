<?php
/**
 * Employee Fixture
 */
class EmployeeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'EmployeeID' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'EmployeeName' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 150, 'collate' => 'utf8mb4_general_ci', 'charset' => 'utf8mb4'),
		'Address' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'charset' => 'utf8mb4'),
		'EmailAddress' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 150, 'collate' => 'utf8mb4_general_ci', 'charset' => 'utf8mb4'),
		'Phone' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'DOB' => array('type' => 'date', 'null' => true, 'default' => null),
		'EmployeeImage' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'utf8mb4_general_ci', 'charset' => 'utf8mb4'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'EmployeeID', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8mb4', 'collate' => 'utf8mb4_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'EmployeeID' => '',
			'EmployeeName' => 'Lorem ipsum dolor sit amet',
			'Address' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'EmailAddress' => 'Lorem ipsum dolor sit amet',
			'Phone' => 1,
			'DOB' => '2020-09-25',
			'EmployeeImage' => 'Lorem ipsum dolor sit amet'
		),
	);

}
