<?php

	session_start();
	
	$admin_user_id = isset($_SESSION['admin_user_id']) ? $_SESSION['admin_user_id'] : 0;

	if ($admin_user_id === 0) {
		$_SESSION['error_message'] = "You are not logged in. Please Log in.";
		header("Location: login.php");
		exit;
	}