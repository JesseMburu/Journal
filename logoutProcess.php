<?php
include_once "loginProcess1.php"; 
session_start();

$_SESSION = array();

session_destroy();

header("Location: signIn.php");


exit();
?>