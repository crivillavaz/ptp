<?php
App::uses('Step', 'Model');

/**
 * Step Test Case
 *
 */
class StepTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.step',
		'app.risk',
		'app.job',
		'app.course',
		'app.user',
		'app.contractor',
		'app.permission',
		'app.aro',
		'app.aco',
		'app.stage',
		'app.area',
		'app.users_stage',
		'app.permissions_user',
		'app.users_course',
		'app.rule',
		'app.permissions_rule',
		'app.gear',
		'app.jobs_gear',
		'app.steps_gear',
		'app.permissions_risk',
		'app.option',
		'app.risks_option'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Step = ClassRegistry::init('Step');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Step);

		parent::tearDown();
	}

}
