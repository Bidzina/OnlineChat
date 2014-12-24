<?php
$conn = mysqli_connect("localhost","root","","onlinechat");
if(!$conn) {
		echo "Could not connect database !";
		die();
	}

$msg = $_POST['usermsg'];

$query1 = "INSERT INTO chatmessages(messages) values('$msg')";

mysqli_query($conn,$query1);

$query2 = "SELECT messages
FROM chatmessages
ORDER BY id DESC
LIMIT 1;";

$result = mysqli_query($conn,$query2);

$row=mysqli_fetch_assoc($result);
	echo $row['messages'];












 ?>