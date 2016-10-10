<?php
App::uses('JobsController', 'Controller');

/**
 * JobsController Test Case
 *
 */
class JobsControllerTest extends ControllerTestCase {

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
		'app.area',
		'app.stage',
		'app.step',
		'app.risk',
		'app.permissions_risk',
		'app.option',
		'app.risks_option',
		'app.gear',
		'app.jobs_gear',
		'app.steps_gear',
		'app.users_stage',
		'app.rule',
		'app.permissions_rule',
		'app.permissions_user',
		'app.users_course'
	);

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {
		$this->markTestIncomplete('testIndex not implemented.');
	}

/**
 * testView method
 *
 * @return void
 */
	public function testView() {
		$this->markTestIncomplete('testView not implemented.');
	}

/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {
		$this->markTestIncomplete('testAdd not implemented.');
	}

/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {
		$this->markTestIncomplete('testEdit not implemented.');
	}

/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {
		$this->markTestIncomplete('testDelete not implemented.');
	}

}
