<?php
require_once('Utils.php');

$courses = get_courses();
$course_map = get_key_map($courses, 'idnumber', 'id');

$events = array(
	array(
		'name' => 'test-cal-event-01',
		'description' => 'test-cal-event-01',
		//'location' => 'test-loc',
		'courseid' => $course_map['test-course-01'],
		'eventtype' => 'course',
		'timestart' => convert_to_timestamp('2020-08-03 09:00:00'),
		'timeduration' => 60,
		'repeats' => 5,
	),

);

$return = create_calendar_events($events);
var_dump($return);

?>
