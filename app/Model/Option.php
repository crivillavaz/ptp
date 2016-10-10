<?php
App::uses('AppModel', 'Model');
/**
 * Option Model
 *
 * @property Risk $Risk
 */
class Option extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'opcion';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'opcion' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
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
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	// public $hasAndBelongsToMany = array(
	// 	'Risk' => array(
	// 		'className' => 'Risk',
	// 		'joinTable' => 'risks_options',
	// 		'foreignKey' => 'option_id',
	// 		'associationForeignKey' => 'risk_id',
	// 		'unique' => 'keepExisting',
	// 		'conditions' => '',
	// 		'fields' => '',
	// 		'order' => '',
	// 		'limit' => '',
	// 		'offset' => '',
	// 		'finderQuery' => '',
	// 	)
	// );

	public $belongsTo = array(
		'Risk' => array(
			'className' => 'Risk',
			'foreignKey' => 'risk_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
	);


}
