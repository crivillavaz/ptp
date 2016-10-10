<?php
App::uses('AppModel', 'Model');
/**
 * StepsGear Model
 *
 * @property Gear $Gear
 * @property Step $Step
 */
class StepsGear extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'gear_id';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'gear_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'step_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Gear' => array(
			'className' => 'Gear',
			'foreignKey' => 'gear_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Step' => array(
			'className' => 'Step',
			'foreignKey' => 'step_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
