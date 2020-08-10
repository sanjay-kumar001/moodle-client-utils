<?php
require_once('Utils.php');

$members = array(
	array(
		'cohorttype' => array('type' => 'idnumber', 'value' => 'test-cohort-01'),
		'usertype' => array('type' => 'username', 'value' => 'test-user-01'),
	),

);

$return = add_cohort_members($members);

?>
