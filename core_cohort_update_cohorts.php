<?php
require_once('Utils.php');

$cohorts = array(
		array(
			'id' => 56, // mandatory system id of cohort
			'name' => 'STUDENT-VIII-A-UPDATED', //mandatory cohort name
			'idnumber' => 'STUDENT-VIII-A-UPDATED', //mandatory cohort id number
			//'description' => 'DESCRIPTION UPDATED', //optional cohort description
			'categorytype' => array('type' => 'system', 'value' => ''), //mandatory
		),
); 

$result = update_cohorts($cohorts);

var_dump($result);


?>
