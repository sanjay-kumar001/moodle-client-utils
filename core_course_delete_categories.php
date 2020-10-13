<?php
require_once('Utils.php');

$categories = array(
	array(
		'id' => 72, 
		/* category id to delete */

		//'newparent' => 34, 
		/* Optional //the parent category to move the contents to, if specified */

		//'recursive' => 0 
		/* Optional // Default to "0" 
			1: recursively delete all contents inside this category, 
			0: move contents to newparent or current parent category (except if parent is root)
		*/
	),
);


$result = delete_categories($categories);

var_dump($result); // return both category and sub-category


?>
