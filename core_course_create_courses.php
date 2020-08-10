<?php
require_once('Utils.php');

$categories = get_categories();
$category_name_id_map = get_key_map($categories, 'name', 'id');

$courses = array(
		array(
			'fullname' => 'test-course-01',
			'shortname' => 'test-course-01',
			'categoryid' => $category_name_id_map['test-subcategory-01'], 
			'startdate' => convert_to_timestamp('2020-07-01'), //[Optional] timestamp when the course start
			'enddate' => convert_to_timestamp('2021-01-31'), //[Optional] timestamp when the course end
			'idnumber' => 'test-course-01',
			'summary' => 'test-course-01',
			'format' => 'topics', //Default to "topics" //course format: weeks, topics, social, site
			'numsections' => 4, //[Optional] number of weeks/topics
		),
);

$result = create_courses($courses);

?>
