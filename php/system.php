<?php
session_start();
error_reporting(0);

if((isset($_SESSION['host'])) && (isset($_SESSION['user'])) && (isset($_SESSION['database']))){
  $host = $_SESSION['host'];
  $user = $_SESSION['user'];
  $pass = $_SESSION['pass'];
  $database = $_SESSION['database'];
} else {
  $host = "";
  $user = "";
  $pass = "";
  $database = "";
}

$db = new mysqli($host,$user,$pass,$database);

if(isset($_POST['dbconnect'])){
  $_SESSION['host'] = $_POST['host'];
  $_SESSION['user'] = $_POST['user'];
  $_SESSION['pass'] = $_POST['pass'];

  if(empty($_POST['database'])){
    $_SESSION['database'] = "ehejbsgbdbgbfgbfdgbdfgfdjgiiururueebababbbbbabb";
  } else {
    $_SESSION['database'] = $_POST['database'];
  }

  header('location:index.php');
}

if(isset($_POST['dbquery'])){
  $query = $_POST['query'];
  $result = $db->prepare($query);
  $result->execute();
  $result->close();
  header('location:index.php');
}

$db->close();
?>
