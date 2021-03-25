<?php
ob_start();//starting output buffering

session_start();//turn the session start




require_once("functions.php");
require_once("validation_functions.php");
require_once("database.php");
require_once('query_functions.php');
require_once('auth_functions.php');


$db = db_connect();

$contactError= array();
$errors=[];

?>