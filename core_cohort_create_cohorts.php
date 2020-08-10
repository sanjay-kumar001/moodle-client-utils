<?php
require_once('Utils.php');

$cohorts = array(
		array(
			'name' => 'test-cohort-01',
			'idnumber' => 'test-cohort-01',
			'categorytype' => array(
						'type' => 'system', 'value' => ''
					/* for category or sub-categroy level
						'type' => 'idnumber', 'value' => 'VI'
					*/
					),

		),

);

$result = create_cohorts($cohorts);

?>
