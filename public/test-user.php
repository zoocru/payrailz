<?php
	
	require('db.php');
	
	// there's only one user
	$sql = "SELECT * FROM users";
	$result = mysqli_query( $con, $sql ); 
	
	$row = mysqli_fetch_array( $result );
	
	mysqli_close($con);
	
?>

<!DOCTYPE html>
<html>

<head>
    
    <title>Add Private Tour bus</title>
  
</head>


<body>

	<?php
	
		echo "<p>Password from db: <br>" . $row['password'] . "</p>";
        $pass = "C004i3M0nst34";
		$pass = hash('sha256', $pass);
        echo "<p>Entered password: <br>" . $pass . "</p>";
		
		if ( $row['password'] == $pass) {
			echo "The passwords match "; 
		} else {  
			echo "Passwords do not match";
		}
	?>
 
</body>

</html>