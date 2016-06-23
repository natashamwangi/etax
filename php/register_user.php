<?php
session_start();
include("connect.php");
if (isset($_POST['register'])) {
	$first_name 	= $_POST['first_name'];
	$last_name 		= $_POST['last_name'];
	$company_name 	= $_POST['company_name'];
	$email 			= $_POST['email'];
	$pass 			= $_POST['password'];
	$password 		= sha1($pass);

	mysqli_autocommit($Con,false);   
       
  	$sql = ("INSERT INTO `tax`.`register` (`user_id`, `first_name`, `last_name`, `company_name`, `email`, `password`) 
  		VALUES (NULL, '$first_name', '$last_name', '$company_name', '$email', '$password')");

  	$query=mysqli_query($Con,$sql) or mysql_error();

	  if ($query) {

	    mysqli_query($Con,"COMMIT");

	  $_SESSION['msg']= "Registration Successful, you can now log in to your account";
	  header("location:../login.php"); 

	  } else {        
	      mysqli_query($Con,"ROLLBACK");
	          
	  $_SESSION['msg']="An error occured during processing please try again";
	  header("location:../register.php");
	  }

	  mysqli_close($Con);

	}else{
		  $_SESSION['msg']="fill this form to get registered";
		  header("location:../register.php");
	}
	?>