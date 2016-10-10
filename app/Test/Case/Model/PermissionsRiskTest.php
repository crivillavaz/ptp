<?php
App::uses('PermissionsRisk', 'Model');

/**
 * PermissionsRisk Test Case
 *
 */
class PermissionsRiskTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.permissions_risk',
		'app.permission',
		'app.aro',
		'app.aco',
		'app.risk'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PermissionsRisk = ClassRegistry::init('PermissionsRisk');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PermissionsRisk);

		parent::tearDown();
	}

}
