<?php
require_once('Utils.php');

$field = 'username'; // <string> the search field can be 'id' or 'idnumber' or 'username' or 'email'
$values = array('ks-h-dfasfassa-2020-2645');  // list of string value to match

$result = get_users_by_field($field, $values);
var_dump($result);

?>
