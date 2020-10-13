<?php
require_once('Utils.php');

$cohorts = array(
		array(
			'name' => 'STUDENT-VIII-A',
			'idnumber' => 'STUDENT-VIII-A',
			'categorytype' => array(
						'type' => 'system', 'value' => ''
					/* for category or sub-categroy level
						'type' => 'idnumber', 'value' => 'VI'
					*/
					),
		),
		array(
			'name' => 'STUDENT-VIII-B',
			'idnumber' => 'STUDENT-VIII-B',
			'categorytype' => array('type' => 'system', 'value' => ''),
		),	
		array(
			'name' => 'STUDENT-VIII-KANNADA',
			'idnumber' => 'STUDENT-VIII-KANNADA',
			'categorytype' => array('type' => 'system', 'value' => ''),
		),	
		array(
			'name' => 'STUDENT-VIII-HINDI',
			'idnumber' => 'STUDENT-VIII-HINDI',
			'categorytype' => array('type' => 'system', 'value' => ''),
		),	
		array(
			'name' => 'TEACHER-MIDDLE-HINDI',
			'idnumber' => 'TEACHER MIDDLE ENGLISH',
			'categorytype' => array('type' => 'system', 'value' => ''),
		),
		array(
			'name' => 'TEACHER-MIDDLE-KANNADA',
			'idnumber' => 'TEACHER-MIDDLE-KANNADA',
			'categorytype' => array('type' => 'system', 'value' => ''),
		),	
		array(
			'name' => 'TEACHER-MIDDLE-ENGLISH',
			'idnumber' => 'TEACHER-MIDDLE-ENGLISH',
			'categorytype' => array('type' => 'system', 'value' => ''),
		),									
		array(
			'name' => 'TEACHER-MIDDLE-MATH',
			'idnumber' => 'TEACHER-MIDDLE-MATH',
			'categorytype' => array('type' => 'system', 'value' => ''),
		),
		array(
			'name' => 'TEACHER-MIDDLE-PHYSICS',
			'idnumber' => 'TEACHER-MIDDLE-PHYSICS',
			'categorytype' => array('type' => 'system', 'value' => ''),
		),
		array(
			'name' => 'TEACHER-MIDDLE-CHEMISTRY',
			'idnumber' => 'TEACHER-MIDDLE-CHEMISTRY',
			'categorytype' => array('type' => 'system', 'value' => ''),
		),
		array(
			'name' => 'TEACHER-MIDDLE-BIOLOGY',
			'idnumber' => 'TEACHER-MIDDLE-BIOLOGY',
			'categorytype' => array('type' => 'system', 'value' => ''),
		),
		array(
			'name' => 'TEACHER-MIDDLE-TECHNOLOGY',
			'idnumber' => 'TEACHER-MIDDLE-TECHNOLOGY',
			'categorytype' => array('type' => 'system', 'value' => ''),
		),
		array(
			'name' => 'TEACHER-MIDDLE-SPORTS',
			'idnumber' => 'TEACHER-MIDDLE-SPORTS',
			'categorytype' => array('type' => 'system', 'value' => ''),
		),
		array(
			'name' => 'TEACHER-MIDDLE-FINE-ARTS',
			'idnumber' => 'TEACHER-MIDDLE-FINE-ARTS',
			'categorytype' => array('type' => 'system', 'value' => ''),
		),

);

$result = create_cohorts($cohorts);

?>
