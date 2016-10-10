<?php
App::uses('PermissionsRule', 'Model');

/**
 * PermissionsRule Test Case
 *
 */
class PermissionsRuleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.permissions_rule',
		'app.permission',
		'app.aro',
		'app.aco',
		'app.rule'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PermissionsRule = ClassRegistry::init('PermissionsRule');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PermissionsRule);

		parent::tearDown();
	}

}
