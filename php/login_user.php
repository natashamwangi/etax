<?php
session_start();
include("connect.php");
if (isset($_POST['login'])) {

	$email 			= $_POST['email'];
	$pass 			= $_POST['password'];
	$password 		= sha1($pass);

	$exe=mysqli_query($Con,"select  * from register where password='$password' and email='$email'");
	$row= mysqli_fetch_array($exe);

	$_SESSION['id']=$row["user_id"];

	if(mysqli_num_rows(mysqli_query($Con,"select  * from register where password='$password' and email='$email'" ))>0)
	{

	//$_SESSION['msg']= "Registration Successful, you can now log in to your account";
	header("location:../user/index.php"); 

	}
	else 
	{
	  $_SESSION['msg']="Log in failed, Email or Password is incorrect";
	  header("location:../login.php");

	}
}else
	{
		  $_SESSION['msg']="Use this form to login please";
		  header("location:../login.php");
	}
	?>

	