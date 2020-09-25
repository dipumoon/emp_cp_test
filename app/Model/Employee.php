<?php
App::uses('AppModel', 'Model');
/**
 * Employee Model
 *
 */
class Employee extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'EmployeeID';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'EmployeeID' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'EmployeeName' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'This field is required',
				'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'EmailAddress' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'This field is required',
				'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'email' => array(
				'rule' => array('email'),
				'message' => 'Email format is invalid.',
				'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'unique' => array(
		        'rule' => 'isUnique',
		        'message' => 'This email id is already exist in the system',
		        'required' => 'create'
		    ),
		),
		'Phone' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'This field is required',
				'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'This field accepts numeric value only	',
				'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'DOB' => array(
		        'date' => array(
		            'rule' => array('date', 'ymd'),
		            'message' => 'You must provide a DOB in YYYY-MM-DD format.',
		            'allowEmpty' => false
		        ),
		        // 'future' => array(
		        //     'rule' => array('checkFutureDate'),
		        //     'message' => 'DOB must be not be future date'
		        // )
		),
		'EmployeeImage' => array(
			'upload' =>array(
		        'rule' => 'uploadError',
		        'message' => 'Something went wrong with the upload.'
		    ),
		    'ext' => array(
		    	'rule' => array('extension',array( 'png', 'jpg')
		        ),
		        'message' => 'Please supply a valid image.'
		    )
		),
	);

	// public function checkFutureDate($check) {
	//     $value = array_values($check);

	//     return strtotime($value['0']) <	strtotime(date('Y-m-d'));
	// }
}
