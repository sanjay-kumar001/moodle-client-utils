<?php
require_once('Utils.php');

$users = get_users();
$user_map = get_key_map($users, 'username', 'id');

$assignments = array(
	array(
		'roleid' => 0,
		'userid' => $user_map['test-user-01'],
	),

);

$return = assign_roles($members);

?>
