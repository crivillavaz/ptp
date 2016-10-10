<?php
App::uses('StepsGear', 'Model');

/**
 * StepsGear Test Case
 *
 */
class StepsGearTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.steps_gear',
		'app.gear',
		'app.step'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->StepsGear = ClassRegistry::init('StepsGear');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->StepsGear);

		parent::tearDown();
	}

}
