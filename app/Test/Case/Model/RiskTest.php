<?php
App::uses('Risk', 'Model');

/**
 * Risk Test Case
 *
 */
class RiskTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.risk',
		'app.job',
		'app.step',
		'app.permission',
		'app.aro',
		'app.aco',
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
		$this->Risk = ClassRegistry::init('Risk');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Risk);

		parent::tearDown();
	}

}
