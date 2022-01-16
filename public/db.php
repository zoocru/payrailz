<?php	
    
    //Connect To Database
	//$con = mysqli_connect("127.0.0.1", "my_user", "my_password", "my_db");

	// Production connection
	//$con = mysqli_connect("localhost","ustaekwo_cruz","Zoocru123!","ustaekwo_tkd");
	
	// Local connection
	$con = mysqli_connect("localhost:8889","root","cruz","payrailz");

	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}