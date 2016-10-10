<?php
App::uses('UsersCourse', 'Model');

/**
 * UsersCourse Test Case
 *
 */
class UsersCourseTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.users_course',
		'app.user',
		'app.course'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->UsersCourse = ClassRegistry::init('UsersCourse');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UsersCourse);

		parent::tearDown();
	}

}
