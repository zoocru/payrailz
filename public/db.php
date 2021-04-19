<?php	
    
    //Connect To Database
	//$con = mysqli_connect("127.0.0.1", "my_user", "my_password", "my_db");
	//$con = mysqli_connect("localhost","zoocrune_cruz","Zoocru123!","zoocrune_crystal");

	$con = mysqli_connect("localhost:8889","root","cruz","crystal_engineering");

	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}