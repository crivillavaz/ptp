<?php
App::uses('RisksOption', 'Model');

/**
 * RisksOption Test Case
 *
 */
class RisksOptionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.risks_option',
		'app.risk',
		'app.option'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RisksOption = ClassRegistry::init('RisksOption');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RisksOption);

		parent::tearDown();
	}

}
