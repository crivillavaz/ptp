<?php
App::uses('Gear', 'Model');

/**
 * Gear Test Case
 *
 */
class GearTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.gear',
		'app.job',
		'app.jobs_gear',
		'app.step',
		'app.steps_gear'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Gear = ClassRegistry::init('Gear');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Gear);

		parent::tearDown();
	}

}
