<?php
	
	//require_once 'authorize.php';
	require('db.php');
	
	
	if (isset($_POST['submit'])) {
		
		$username = $_POST['username'];
		$username = mysqli_real_escape_string($con, $username);
		
		$password = $_POST['password'];
		$password = mysqli_real_escape_string($con, $password);
		$password = hash('sha256', $password);
		
		$sql = "INSERT INTO users (username, password)
				VALUES ('$username', '$password')";
		
		if (mysqli_query($con, $sql)) {
			echo "User added to the database.";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($con);
		}
	}
	
	mysqli_close($con);
?>

<!DOCTYPE html>
<html>

<head>
    
    <title>Add User</title>
    
    <style>
        label {
			display : inline-block;
			width : 150px;
			margin-bottom : 10px;
		}
    </style>
    
</head>


<body>
 
    <form method="post" action="">
        <label>Username:</label>
        <input type="text" name="username" />
        <br />
     
        <label>Password:</label>
        <input type="text" name="password" />    
        <br />
        
        <input type="submit" name="submit" value="Submit User">
    </form> 
 
</body>

</html>