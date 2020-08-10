<?php
require_once('Utils.php');

$users = array(
		array(
			'username' => 'test-user-01',
			'password' => 'test-user-01',
			'firstname' => 'Test',
			'lastname' => '01',
			'email' => 'test-user-01@example.com',
			'auth' => 'manual',
			'phone1' => '0123456789',
			'customfields' => array(
				array('type' => 'middle_name', 'value' => "M-01" ),
				array('type' => 'status', 'value' => "Active" ),
			),
		),
);

$result = create_users($users);

?>
