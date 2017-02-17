<?php 
include 'loginserv.php';
$_SESSION['username'] = null;
header("Location: login.php");

?>