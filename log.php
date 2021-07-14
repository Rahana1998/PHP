<?php
$error_message="This is an error message!";
$log_file="./my-errors.log";
ini_set("log_errors",TRUE);
ini_set('error_log',$log_file);
error_log($error_message);
?>