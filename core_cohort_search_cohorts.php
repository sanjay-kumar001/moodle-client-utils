<?php
require_once('Utils.php');

$query = 'Student';
$context = array( 
		"contextid" => 0, //int        
	        "contextlevel" => '', //string        
        	"instanceid" => 0 //int        
        );
$includes = 'all';
$result = search_cohorts($query, $context, $includes); 

var_dump($result);

/*

response
==========
array(7) {
    'id' => 
    int(57) //ID of the cohort
    'name' =>
    string(14) "STUDENT-VIII-B" //cohort name
    'idnumber' =>
    string(14) "STUDENT-VIII-B" //cohort idnumber
    'description' =>
    string(0) ""
    'descriptionformat' =>
    int(1) //description format (1 = HTML, 0 = MOODLE, 2 = PLAIN or 4 = MARKDOWN)
    'visible' =>
    bool(true) //cohort visible
    'theme' =>
    string(0) "" //cohort theme
  }

error
=====
<?xml version="1.0" encoding="UTF-8"?>
<EXCEPTION class="invalid_parameter_exception">
    <MESSAGE>Invalid parameter value detected</MESSAGE>
    <DEBUGINFO></DEBUGINFO>
</EXCEPTION>

*/

?>
