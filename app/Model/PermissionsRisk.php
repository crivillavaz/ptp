<?php
App::uses('AppModel', 'Model');
/**
 * PermissionsRisk Model
 *
 * @property Permission $Permission
 * @property Risk $Risk
 */
class PermissionsRisk extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'permission_id';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'permission_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'risk_id' => array(
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
		'Permission' => array(
			'className' => 'Permission',
			'foreignKey' => 'permission_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Risk' => array(
			'className' => 'Risk',
			'foreignKey' => 'risk_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
