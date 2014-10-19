<?php

	if( empty($_POST['email']) || empty($_POST['password']) ){
		echo "enter all fields";
		die();
	}
	
	$email = mysql_real_escape_string($_POST['email']);
	$password = mysql_real_escape_string($_POST['password']);
	$conn = mysqli_connect("localhost","root","","onlinechat");
	
	if(!$conn) {
		echo "Could not connect database !";
		die();
	}

	$shapassword = sha1($password);

	$query = "SELECT email,password FROM users;";

	$result = mysqli_query($conn,$query);
	while ($row = mysqli_fetch_assoc($result)) {
		if($row['email'] == $email && $row['password'] == $shapassword) {
			header('location: index.php');
			die();
		}
	}

	mysqli_close($conn);

?>