<?php
require_once('Utils.php');

$userids = array(24, 31); // list of Moodle Ids 

$result = delete_users($userids);
var_dump($result);

?>
