<?php
if(!empty($_POST['msg'])){
$con = mysqli_connect("localhost","root","","onlinechat");
if(!$con) {
		echo "Could not connect database !";
		die();
	}
$msg=mysql_real_escape_string($_POST['msg']);


$query = "INSERT INTO chatmessages(textarea) values('$msg')";
mysqli_query($con,$query);

mysql_close();

}

header("location: main.php")
 ?>