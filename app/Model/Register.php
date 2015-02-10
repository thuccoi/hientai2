<?php
App::uses('AppModel', 'Model');
/**
 * Register Model
 *
 */
class Register extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'user_name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => '入力必須です',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'lastName' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => '入力必須です',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'firstName' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => '入力必須です',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'zip1' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => '入力必須です',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			
		),
		'zip2' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => '入力必須です',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			
		),
//		'address1' => array(
//
//                                'rule' => array('range', 1, 100),
//                                'message' => '入力必須です',
//			//'allowEmpty' => false,
//				//'required' => false,
//				//'last' => false, // Stop validation after this rule
//				//'on' => 'create', // Limit validation to 'create' or 'update' operations
//		),
		'address2' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => '入力必須です',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
//		'tel_num_a' => array(
//			'numeric' => array(
//				'rule' => array('numeric'),
//				'message' => '電話番号が入力されていません。',
//				//'allowEmpty' => false,
//				//'required' => false,
//				//'last' => false, // Stop validation after this rule
//				//'on' => 'create', // Limit validation to 'create' or 'update' operations
//			),
//			'notEmpty' => array(
//				'rule' => array('notEmpty'),
//				'message' => '入力必須です',
//				//'allowEmpty' => false,
//				//'required' => false,
//				//'last' => false, // Stop validation after this rule
//				//'on' => 'create', // Limit validation to 'create' or 'update' operations
//			),
//		),
//		'tel_num_e' => array(
//			'numeric' => array(
//				'rule' => array('numeric'),
//				'message' => '電話番号が入力されていません。',
//				//'allowEmpty' => false,
//				//'required' => false,
//				//'last' => false, // Stop validation after this rule
//				//'on' => 'create', // Limit validation to 'create' or 'update' operations
//			),
//			'notEmpty' => array(
//				'rule' => array('notEmpty'),
//				'message' => '入力必須です',
//				//'allowEmpty' => false,
//				//'required' => false,
//				//'last' => false, // Stop validation after this rule
//				//'on' => 'create', // Limit validation to 'create' or 'update' operations
//			),
//		),
//		'tel_num_n' => array(
//                        'numeric' => array(
//				'rule' => array('numeric'),
//				'message' => '電話番号が入力されていません。',
//				//'allowEmpty' => false,
//				//'required' => false,
//				//'last' => false, // Stop validation after this rule
//				//'on' => 'create', // Limit validation to 'create' or 'update' operations
//			),
//			'notEmpty' => array(
//				'rule' => array('notEmpty'),
//				'message' => '入力必須です',
//				//'allowEmpty' => false,
//				//'required' => false,
//				//'last' => false, // Stop validation after this rule
//				//'on' => 'create', // Limit validation to 'create' or 'update' operations
//			),
//		),
		'mail' => array(
			'email' => array(
				'rule' => array('email'),
				'message' => 'メールアドレスが入力されていません。',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => '入力必須です',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'mail_cf' => array(
			'email' => array(
				'rule' => array('email'),
				'message' => 'メールアドレスが入力されていません。',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'compare' => array(
				'rule' => array('checkConfirmEmail'),
				'message' => 'メールアドレスとメールアドレス(確認)が一致しません。',
				'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
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
        /**
         * 
         * @return Bool
         */
        public function checkConfirmEmail(){
//            debug($this->data);
            return ($this->data["Register"]['mail'] === $this->data["Register"]['mail_cf']);
//             return ($this->data['User']['new_password'] === $this->data['User']['password_confirm']);
        }
       
}
