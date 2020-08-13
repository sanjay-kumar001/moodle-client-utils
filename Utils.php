<?php
/**
 * 
 * @purpose	: CRUD functions for Moodle
 * @author	: Sanjay Kumar sanjay.kumar001@gmail.com
 *
**/

require_once('MoodleRest.php');

function create_courses($courses){
	$ws_function = 'core_course_create_courses';
	$param = array("courses" => $courses);
	return push_data_to_moodle($ws_function, $param);
}

function get_courses(){
	$ws_function = 'core_course_get_courses';
	$param = array("criteria" => array());
	return get_moodle_data($ws_function, $param);
}

function create_categories($course_category){
	$ws_function = 'core_course_create_categories';
	$param = array("categories" => $course_category);
	return push_data_to_moodle($ws_function, $param);

}

function get_categories(){
	$ws_function = 'core_course_get_categories';
	$param = array("criteria" => array());
	return get_moodle_data($ws_function, $param);
}

function create_users($users){
	$ws_function = 'core_user_create_users';
	$param = array("users" => $users);
	return push_data_to_moodle($ws_function, $param);
}

function get_users(){
	$ws_function = 'core_user_get_users';
	$param = array("criteria" => array());
	return get_moodle_data($ws_function, $param);
}

function get_users_by_field($field, $values){
	$ws_function = 'core_user_get_users_by_field';
	$param = array("field" => $field, 'values' => $values);
	return get_moodle_data($ws_function, $param);
}

function update_users($users){
	$ws_function = 'core_user_update_users';
	$param = array("users" => $users);
	return push_data_to_moodle($ws_function, $param);
}

function delete_users($userids){
	$ws_function = 'core_user_delete_users';
	$param = array("userids" => $userids);
	return push_data_to_moodle($ws_function, $param);
}

function assign_roles($assignments){
	$ws_function = 'core_role_assign_roles';
	$param = array("assignments" => $assignments);
	return push_data_to_moodle($ws_function, $param);
}

function create_cohorts($cohorts){
	$ws_function = 'core_cohort_create_cohorts';
	$param = array("cohorts" => $cohorts);
	return push_data_to_moodle($ws_function, $param);
}

function add_cohort_members($members){
	$ws_function = 'core_cohort_add_cohort_members';
	$param = array("members" => $members);
	return push_data_to_moodle($ws_function, $param);
}

function create_calendar_events($events){
	$ws_function = 'core_calendar_create_calendar_events';
	$param = array("events" => $events);
	return push_data_to_moodle($ws_function, $param);
}
	
function get_moodle_data($ws_function, $param){
	$config = include('Config.php');
	$MoodleRest = new MoodleRest($config->server_address, $config->token);
	return $MoodleRest->request($ws_function, $param, MoodleRest::METHOD_GET);
}

function push_data_to_moodle($ws_function, $param){
	$config = include('Config.php');
	$MoodleRest = new MoodleRest($config->server_address, $config->token);
	return $MoodleRest->request($ws_function, $param, MoodleRest::METHOD_POST);
}

function get_key_map($data, $keyfield, $valuefield){
	$result = array();
	foreach($data as $d){
		$result[$d[$keyfield]] = $d[$valuefield];
	}
	return $result;
}

function convert_to_timestamp($datetime){
	$date = new DateTime($datetime);
	return $date->getTimestamp();
}

