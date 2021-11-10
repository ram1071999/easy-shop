<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

	
		$conn = mysqli_connect("localhost", "root", "", "registration");
		
		
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		
		$name = $_REQUEST['name'];
		$mobile=$_REQUEST['mobile'];
		$email = $_REQUEST['email'];
		$password = $_REQUEST['password'];

		
	
		$sql = "INSERT INTO `register` (`id`, `name`, `mobile`, `email`, `password`) VALUES ('','$name','$mobile','$email' ,'$password');";
		
		if(mysqli_query($conn, $sql)){
			echo "<script> location.href='index.php';</script>";
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
