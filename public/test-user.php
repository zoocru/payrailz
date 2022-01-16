<?php
	
	require('db.php');
	
	// there's only one user
	$sql = "SELECT * FROM users
			WHERE id = 1";
	$result = mysqli_query( $con, $sql ); 
	
	$row = mysqli_fetch_array( $result );
	
	mysqli_close($con);
	
?>

<!DOCTYPE html>
<html>

<head>
    
    <title></title>
  
</head>


<body>

	<?php
	
		echo "<p>Password from db: <br>" . $row['password'] . "</p>";
		//$pass = "tkd4eva!";
		$pass = "zoocru123";
		$pass = hash('sha256', $pass);
        echo "<p>Entered password: <br>" . $pass . "</p>";
		
		if ( $row['password'] == $pass) {
			echo "The passwords match!"; 
		} else {  
			echo "Passwords DO NOT MATCH";
		}
	?>
 
</body>

</html>