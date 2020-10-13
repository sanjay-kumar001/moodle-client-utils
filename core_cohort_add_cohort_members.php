<?php
require_once('Utils.php');

$members = array(
	array(
		'cohorttype' => array('type' => 'idnumber', 'value' => 'viii-stud-english'),
		'usertype' => array('type' => 'username', 'value' => 'viii-stud-01'),
	),
	array(
		'cohorttype' => array('type' => 'idnumber', 'value' => 'viii-stud-hindi'),
		'usertype' => array('type' => 'username', 'value' => 'viii-stud-01'),
	),	
	array(
		'cohorttype' => array('type' => 'idnumber', 'value' => 'viii-stud-kannada'),
		'usertype' => array('type' => 'username', 'value' => 'viii-stud-01'),
	),	
	array(
		'cohorttype' => array('type' => 'idnumber', 'value' => 'viii-stud-science'),
		'usertype' => array('type' => 'username', 'value' => 'viii-stud-01'),
	),
	array(
		'cohorttype' => array('type' => 'idnumber', 'value' => 'viii-stud-math'),
		'usertype' => array('type' => 'username', 'value' => 'viii-stud-01'),
	),
	array(
		'cohorttype' => array('type' => 'idnumber', 'value' => 'viii-stud-technology'),
		'usertype' => array('type' => 'username', 'value' => 'viii-stud-01'),
	),
	array(
		'cohorttype' => array('type' => 'idnumber', 'value' => 'viii-stud-social-science'),
		'usertype' => array('type' => 'username', 'value' => 'viii-stud-01'),
	),
	array(
		'cohorttype' => array('type' => 'idnumber', 'value' => 'viii-stud-sports'),
		'usertype' => array('type' => 'username', 'value' => 'viii-stud-01'),
	),
	array(
		'cohorttype' => array('type' => 'idnumber', 'value' => 'viii-stud-fine-arts'),
		'usertype' => array('type' => 'username', 'value' => 'viii-stud-01'),
	),	
	array(
		'cohorttype' => array('type' => 'idnumber', 'value' => 'viii-stud-wellness'),
		'usertype' => array('type' => 'username', 'value' => 'viii-stud-01'),
	),
	array(
		'cohorttype' => array('type' => 'idnumber', 'value' => 'middle-teach-english'),
		'usertype' => array('type' => 'username', 'value' => 'middle-teach-eng-01'),
	),
	array(
		'cohorttype' => array('type' => 'idnumber', 'value' => 'middle-teach-physics'),
		'usertype' => array('type' => 'username', 'value' => 'middle-teach-physics-01'),
	),
	array(
		'cohorttype' => array('type' => 'idnumber', 'value' => 'viii-stud-math'),
		'usertype' => array('type' => 'username', 'value' => 'middle-teach-math-01'),
	),
	
);

$return = add_cohort_members($members);

?>
