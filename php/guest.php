<?php 
session_start();

$_SESSION['username'] = 'Guest';
$_SESSION['user_type'] = 'Guest';
header("Location:../php/Home.php");

?>