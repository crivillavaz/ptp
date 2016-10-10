<?php
App::uses('Job', 'Model');

/**
 * Job Test Case
 *
 */
class JobTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
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
		'app.jobs_gear',
		'app.steps_gear'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Job = ClassRegistry::init('Job');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Job);

		parent::tearDown();
	}

}
