<?php
App::uses('Contractor', 'Model');

/**
 * Contractor Test Case
 *
 */
class ContractorTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.contractor',
		'app.permission',
		'app.aro',
		'app.aco',
		'app.stage',
		'app.user',
		'app.permissions_user',
		'app.course',
		'app.users_course',
		'app.users_stage'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Contractor = ClassRegistry::init('Contractor');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Contractor);

		parent::tearDown();
	}

}
