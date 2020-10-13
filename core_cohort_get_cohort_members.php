<?php
require_once('Utils.php');

$cohortids = array(56); // a list of cohort system id 

$result = get_cohort_members($cohortids);

var_dump($result);


/*

response
========
list of ( 
object {
cohortid int   //cohort record id
userids list of ( 
int   //user id
)} 
)


*/


?>
