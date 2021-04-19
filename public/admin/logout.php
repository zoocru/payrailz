<?php

	session_start();
	
	$_SESSION['admin_user_id'] = 0;
	
	session_destroy();
	
	header("Location: login.php");
