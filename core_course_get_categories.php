<?php
require_once('Utils.php');

$criteria = array(
	array(
		'key' => 'name', /*The category column to search, expected keys (value format) are:"id" (int) the category id,"ids" (string) category ids separated by commas,"name" (string) the category name,"parent" (int) the parent category id,"idnumber" (string) category idnumber*/
		'value' => 'English' 
	),
);


$result = get_categories($criteria);

var_dump($result); // return both category and sub-category


?>
