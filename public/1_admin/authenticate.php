<?php
	session_start();

	require('../db.php');
	
	// Get the info
	$username = isset($_POST['username'])? $_POST['username'] : '';
	$username = mysqli_real_escape_string($con, $username);
	
	$password = isset($_POST['password'])? $_POST['password'] : '';
	$password = mysqli_real_escape_string($con, $password);

	// Lets check the db
	$sql = "SELECT * FROM users WHERE username='$username'";
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($result);
	
	// Set the variables 
	$actualUsername = $row['username']; // Username in DB
	$actual_password = $row['password']; // Hashed password in DB
	
	$expected_password = hash('sha256', $password);
	$user_id = $row['id'];
	
	// Test against the db and if not good, then send to login.php
	if ( $username != $actualUsername  ||  $actual_password != $expected_password ) {
		$_SESSION['error_message'] = "Authentication failed. Please try again.";
		header("Location: login.php");
		exit;
	}

	// Its ok, lets kill the error message and pass the user id for later use
	$_SESSION['error_message'] = null;
	unset($_SESSION['error_message']);

	$_SESSION['admin_user_id'] = $user_id;

	header("Location: index.php");
	
?>