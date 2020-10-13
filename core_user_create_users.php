<?php
require_once('Utils.php');

$users = array(
  array (
    'username' => 'ks-th-2020-fe-tech-05423',
    'password' => '9538226487',
    'firstname' => 'Dinesh',
    'lastname' => 'Vemula',
    'email' => 'dineshvcse07@gmail.com',
    'auth' => 'manual',
    'phone1' => '9538226487',
    'customfields' =>
    array (
      0 =>
      array (
        'type' => 'user_type',
        'value' => 'teacher',
      ),
    ),
  ),



/*
		array(
			'username' => 'stud-viii-a-01',
			'password' => 'frappe',
			'firstname' => 'STUDENT-VIII-A',
			'lastname' => '01',
			'email' => 'stud-viii-a-01@example.com',
			'auth' => 'manual',
			'phone1' => '0123456789',
			'customfields' => array(
				array('type' => 'middle_name', 'value' => "M" ),
				array('type' => 'status', 'value' => "Active" ),
			),
		),
		array(
			'username' => 'stud-viii-a-02',
			'password' => 'frappe',
			'firstname' => 'STUDENT-VIII-A',
			'lastname' => '02',
			'email' => 'stud-viii-a-02@example.com',
			'auth' => 'manual',
			'phone1' => '0123456789',
			'customfields' => array(
				array('type' => 'middle_name', 'value' => "M" ),
				array('type' => 'status', 'value' => "Active" ),
			),
		),
		array(
			'username' => 'teach-middle-eng-01',
			'password' => 'frappe',
			'firstname' => 'TEACHER MIDDLE ENGLISH',
			'lastname' => '01',
			'email' => 'teach-middle-eng-01@example.com',
			'auth' => 'manual',
			'phone1' => '0123456789',
			'customfields' => array(
				array('type' => 'middle_name', 'value' => "M" ),
				array('type' => 'status', 'value' => "Active" ),
			),
		),
		array(
			'username' => 'teach-middle-math-01',
			'password' => 'frappe',
			'firstname' => 'TEACHER MIDDLE MATH',
			'lastname' => '01',
			'email' => 'teach-middle-math-01@example.com',
			'auth' => 'manual',
			'phone1' => '0123456789',
			'customfields' => array(
				array('type' => 'middle_name', 'value' => "M" ),
				array('type' => 'status', 'value' => "Active" ),
			),
		),
*/
);

$result = create_users($users);

var_dump($result);

?>
