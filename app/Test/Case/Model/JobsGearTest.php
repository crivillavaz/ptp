<?php
App::uses('JobsGear', 'Model');

/**
 * JobsGear Test Case
 *
 */
class JobsGearTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jobs_gear',
		'app.job',
		'app.course',
		'app.user',
		'app.contractor',
		'app.permission',
		'app.aro',
		'app.aco',
		'app.stage',
		'app.permissions_user',
		'app.users_course',
		'app.users_stage',
		'app.risk',
		'app.step',
		'app.permissions_risk',
		'app.option',
		'app.risks_option',
		'app.rule',
		'app.permissions_rule',
		'app.gear',
		'app.steps_gear'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JobsGear = ClassRegistry::init('JobsGear');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JobsGear);

		parent::tearDown();
	}

}
