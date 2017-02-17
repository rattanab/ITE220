<?php
	require_once("includes/connection.php");
	$username = $_POST['username'];
	$password = $_POST['password'];
	session_start();

	if ($username == "" || $password == "") {
		header("location:error.php");
	}
	else{
		if(checkLogin($username, $password)){
			header("location:start_session.php");
				if (!isset($_SESSION['username'])) {
					$_SESSION['username'] = $username;
				}
				else{
					$_SESSION['username'] = $username;
				}
		}
		else{
			header("location:error.php");
		}
	}
?>