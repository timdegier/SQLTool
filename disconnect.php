<?php
session_start();
$_SESSION['host'] = "";
$_SESSION['user'] = "";
$_SESSION['pass'] = "";
$_SESSION['database'] = "none";
header('location:index.php');
?>
