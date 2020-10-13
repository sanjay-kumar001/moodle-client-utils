<?php
require_once('Utils.php');

$categories = array(
	array(
		'id' => 71, //[int]   category id
		'name' => 'English - First Language UPDATED', //[string]  Optional category name
		//'idnumber' => 'test-category-01', //[string]  Optional id number
		//'parent' => '', //[int]   Optional parent category id
		'description' => 'updated data', //[string]  Optional category description
	),
);


$result = update_categories($categories);

var_dump($result); // return both category and sub-category

?>
