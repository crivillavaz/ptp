<?php
App::uses('UsersStage', 'Model');

/**
 * UsersStage Test Case
 *
 */
class UsersStageTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.users_stage',
		'app.user',
		'app.stage'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->UsersStage = ClassRegistry::init('UsersStage');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UsersStage);

		parent::tearDown();
	}

}
