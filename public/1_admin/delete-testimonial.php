<?php

	require_once 'authorize.php';
	require('../db.php');
	
	if(isset($_GET['id'])) {
		
		$id = $_GET['id'];
		
		$sql = "DELETE FROM testimonials WHERE id='$id'";
		$query = mysqli_query( $con, $sql );
		
		header("location: testimonials.php");
		
	}
	
	mysqli_close($con);
?>