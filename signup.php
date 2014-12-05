<?php
	

	if(  empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['email']) || empty($_POST['password']) ||
		 empty($_POST['bday']) || empty($_POST['sex'])){
			echo "enter all fields";
		die();
	}
	if($_POST['password'] != $_POST['re-password']) {
		session_start();
		$_SESSION['msg']="Re-type Correct Password";
		header('location:login.php');
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

	$email_exists=mysqli_query($conn, "SELECT * FROM `users` where email='$mail'");
	
	if($email_exists->num_rows>0){
		session_start();
		$_SESSION['msg']="Email is already taken";
		header('location:login.php');
	} else{
	
	$query = "INSERT INTO users(firstname,lastname,email,password,date,sex) values('$name','$lastname','$mail','$shapassword','$date',$sex)";
		session_start();
		$_SESSION['succmsg']="You registered successfully";
		mysqli_query($conn,$query);
		mysqli_close($conn);
		header('location:login.php');
		exit();
	}
	


?>

