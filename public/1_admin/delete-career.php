<?php

	require_once 'authorize.php';
	require('../db.php');
	
	if(isset($_GET['id'])) {
		
		$id = $_GET['id'];
		
		$sql = "DELETE FROM careers WHERE id='$id'";
		$query = mysqli_query( $con, $sql );
		
		header("location: careers.php");
		
	}
	
	mysqli_close($con);
?>