<?php
/**
 * CourseFixture
 *
 */
class CourseFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'job_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'inicio' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'fin' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'activo' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'unsigned' => false),
		'pdf_dir' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'pdf' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'job_id' => 1,
			'inicio' => '2016-09-09 21:21:14',
			'fin' => '2016-09-09 21:21:14',
			'created' => '2016-09-09 21:21:14',
			'modified' => '2016-09-09 21:21:14',
			'activo' => 1,
			'pdf_dir' => 'Lorem ipsum dolor sit amet',
			'pdf' => 'Lorem ipsum dolor sit amet'
		),
	);

}
