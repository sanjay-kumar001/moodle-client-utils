<?php
require_once('Utils.php');

$course_category = array(
	array(
		'name' => 'test-category-01',
		'idnumber' => 'test-category-01',
		'description' => 'test-category-01',
		'parent' => 0,
	),
);

$course_sub_category = array(
	array(
		'name' => 'test-subcategory-01',
		'idnumber' => 'test-subcategory-01',
		'description' => 'test-subcategory-01',
		'parent' => 'test-category-01',
	),
);

// add course category
$result = create_categories($course_category);


// return if there is any exception
if (array_key_exists('exception', $result)) {
	echo 'exception ['.$result['errorcode'].'] : '.$result['message'].PHP_EOL;
	return;
}

$category_list = get_key_map($result, 'name', 'id');


// update parent id in $sub_category
foreach($course_sub_category as &$sub_category){
	$sub_category['parent'] = $category_list[$sub_category['parent']];
}

$result = create_categories($course_sub_category);


?>
