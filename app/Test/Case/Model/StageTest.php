<?php
App::uses('Stage', 'Model');

/**
 * Stage Test Case
 *
 */
class StageTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.stage',
		'app.contractor',
		'app.permission',
		'app.aro',
		'app.aco',
		'app.user',
		'app.permissions_user',
		'app.course',
		'app.job',
		'app.risk',
		'app.step',
		'app.permissions_risk',
		'app.option',
		'app.risks_option',
		'app.rule',
		'app.permissions_rule',
		'app.gear',
		'app.jobs_gear',
		'app.steps_gear',
		'app.users_course',
		'app.users_stage',
		'app.area'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Stage = ClassRegistry::init('Stage');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Stage);

		parent::tearDown();
	}

}
