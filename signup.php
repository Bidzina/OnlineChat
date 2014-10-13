<?php
	

	if(  empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['email']) || empty($_POST['password']) ||
		 empty($_POST['bday']) || empty($_POST['sex'])){
			echo "enter all fields";
		die();
	}
	if($_POST['password'] != $_POST['re-password']) {
		echo "wrong password";
		die();
	}

	$name = mysql_real_escape_string($_POST['firstname']);
	$lastname = mysql_real_escape_string($_POST['lastname']);
	$mail = mysql_real_escape_string($_POST['email']);
	$password = mysql_real_escape_string($_POST['password']);
	$repassword = mysql_real_escape_string($_POST['re-password']);
	
	$date = mysql_real_escape_string($_POST['bday']);
	$sex = mysql_real_escape_string($_POST['sex']);

	$conn = mysqli_connect("localhost","root","","onlinechat");

	if(!$conn) {
		echo "Could not connect database !";
		die();
	}

	$shapassword = sha1($password);

	$query = "INSERT INTO users(firstname,lastname,email,password,date,sex) values('$name','$lastname','$mail','$shapassword','$date',$sex)";
	mysqli_query($conn,$query);

	mysqli_close($conn);

?>