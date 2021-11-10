<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

	
		$conn = mysqli_connect("localhost", "root", "", "registration1");
		
		
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$password = $_REQUEST['password'];

		
	
		$sql = "INSERT INTO `details` (`name`, `email`, `password`) VALUES ('$name', '$email', '$password');";
		
		if(mysqli_query($conn, $sql)){
			echo "<script> location.href='Bridal.php';</script>";
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
