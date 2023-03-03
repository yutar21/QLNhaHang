<?php
	//Start session
	session_start();
	error_reporting(1);
	
	//Check whether the session variable SESS_MEMBER_ID is present or not
	if(!isset($_SESSION['username']) || (trim($_SESSION['username']) == '')) {
		header("location: ../view/Security/login.php");
		exit();
	}
?>