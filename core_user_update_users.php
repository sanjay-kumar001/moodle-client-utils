<?php
require_once('Utils.php');

$users = array(
		array(
			'id' => 45,// Moodle Id
			'firstname' => 'Test Updated',
		),
);

$result = update_users($users);

?>
