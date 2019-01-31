<?php

 $name = filter_input(INPUT_POST, 'cname');
 $username = filter_input(INPUT_POST, 'username');
 $password = filter_input(INPUT_POST, 'password');
 if (!empty($name)) 
 {
 	if (!empty($username))
 	{
		if (!empty($password))
		{
			$servername = "localhost";
			  $dusername = "root";
			  $dpassword = "";
			  $database = "web shop";
			  // Create connection
			  $conn = mysqli_connect($servername, $dusername, $dpassword, $database);

			  /*// Check connection
			  if (!$conn) {
			      die("Connection failed: " . mysqli_connect_error());
			  } 
			  echo "Connected successfully";*/

			$sql = "INSERT INTO customer ( cname, username, password)
					values ('$name','$username','$password')";

			if ($conn->query($sql))
			{
				echo "New record is inserted sucessfully";
			}
			else
			{
				echo "Error: ". $sql ."
				". $conn->error;
			}

		}
	}
 }
 else
 {
	echo "Password should not be empty";
	die();
 }
	/*else{
	echo "Username should not be empty";
	die();
	}*/
?>