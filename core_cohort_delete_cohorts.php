<?php
require_once('Utils.php');

$cohortids = array(70); // a list of cohort system id 

$result = delete_cohorts($cohortids);

var_dump($result);


?>
