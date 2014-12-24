<?php

	
	
	$email = mysql_real_escape_string($_POST['email']);
	$password = mysql_real_escape_string($_POST['password']);
	$conn = mysqli_connect("localhost","root","","onlinechat");
	
	if(!$conn) {
		echo "Could not connect database !";
		die();
	}

	$shapassword = sha1($password);

	$query = "SELECT firstname,lastname,email,password FROM users;";

	$result = mysqli_query($conn,$query);
	while ($row = mysqli_fetch_assoc($result)) {
		if($row['email'] == $email && $row['password'] == $shapassword) {
			if(session_status() == PHP_SESSION_NONE) {
				session_start();
			}

			$_SESSION['email'] = $row['email'];
			$_SESSION['name']=$row['firstname'].' '.$row['lastname'];

			header('location: index.php');
			die();
		}
		
		
	}
		session_start();
		$_SESSION['errmsg']='Email or Password is incorrect';
		header('location:login.php');
		die();
	



	mysqli_close($conn);

?>