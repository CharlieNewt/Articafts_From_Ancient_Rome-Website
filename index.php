<?php
//You can defive any configuration variables here

//Display error messages caused by you php script
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 1);

//The repuire or include statement takes all the text/code/markup that exists
// in the specified file and copies it into the file that uses the included (or required) statement.
require 'application/mvc.php';
?>