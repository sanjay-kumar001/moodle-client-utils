<?php
require_once('Utils.php');

$members = array(
	array(
		'cohortid' => 71, //cohort record id
		'userid' => 55 //user id
	),
);

$return = delete_cohort_members($members);

?>
