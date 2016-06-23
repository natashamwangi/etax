<?php
	//Start session
	session_start();
	//Check whether the session variable SESS_MEMBER_ID is present or not
	if(!isset($_SESSION['id']) || (trim($_SESSION['id']) == '')) {

	  $_SESSION['msg']="Use this form to login please";
	  header("location:../login.php");       
		exit();
	}
        $session_id=$_SESSION['id'];
?>