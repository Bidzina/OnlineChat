<?php
$email = $_POST['data']['email'];
$conn = mysqli_connect("localhost","root","","onlinechat");
if(!$conn) {
		echo 'fail';
		die();
	}


$email_exists=mysqli_query($conn, "SELECT * FROM `users` where email='$email'");

if($email_exists->num_rows>0){
	echo 'fail';
} else{
	echo 'success';
}

?>