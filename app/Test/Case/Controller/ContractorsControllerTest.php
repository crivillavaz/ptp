<?php
App::uses('ContractorsController', 'Controller');

/**
 * ContractorsController Test Case
 *
 */
class ContractorsControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.contractor',
		'app.permission',
		'app.job',
		'app.course',
		'app.user',
		'app.permissions_user',
		'app.users_course',
		'app.stage',
		'app.area',
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
		'app.permissions_rule'
	);

}
