<?php 
session_start();
//session_unset();
unset($session_id);
session_destroy();
$_SESSION['msg']="You have logged out";
header("location:../index.php");
?>