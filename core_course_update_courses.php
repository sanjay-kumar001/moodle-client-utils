<?php
require_once('Utils.php');

$courses = array(
		array(
			'id' => 69, // course id
			'fullname' => 'VIII - Wellness UPDATED', //Optional course full name
		),
);

$result = update_courses($courses);

var_dump($result);

/*

General structure

  //courses to update
list of ( 
object {
id int   //ID of the course
fullname string  Optional //full name
shortname string  Optional //course short name
categoryid int  Optional //category id
idnumber string  Optional //id number
summary string  Optional //summary
summaryformat int  Optional //summary format (1 = HTML, 0 = MOODLE, 2 = PLAIN or 4 = MARKDOWN)
format string  Optional //course format: weeks, topics, social, site,..
showgrades int  Optional //1 if grades are shown, otherwise 0
newsitems int  Optional //number of recent items appearing on the course page
startdate int  Optional //timestamp when the course start
enddate int  Optional //timestamp when the course end
numsections int  Optional //(deprecated, use courseformatoptions) number of weeks/topics
maxbytes int  Optional //largest size of file that can be uploaded into the course
showreports int  Optional //are activity report shown (yes = 1, no =0)
visible int  Optional //1: available to student, 0:not available
hiddensections int  Optional //(deprecated, use courseformatoptions) How the hidden sections in the course are
                                        displayed to students
groupmode int  Optional //no group, separate, visible
groupmodeforce int  Optional //1: yes, 0: no
defaultgroupingid int  Optional //default grouping id
enablecompletion int  Optional //Enabled, control via completion and activity settings. Disabled,
                                        not shown in activity settings.
completionnotify int  Optional //1: yes 0: no
lang string  Optional //forced course language
forcetheme string  Optional //name of the force theme
courseformatoptions  Optional //additional options for particular course format
list of ( 
object {
name string   //course format option name
value string   //course format option value
} 
)customfields  Optional //Custom fields
list of ( 
object {
shortname string   //The shortname of the custom field
value string   //The value of the custom field
} 
)} 
)
*/
