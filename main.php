
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/mainpage.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="chatmessages.js"></script>
	<script src="logout.js"></script>
</head>
<body>
<div id="wrapper">
    <div id="menu">
        <p class="welcome">Welcome <b><?php session_start(); echo $_SESSION['name'] ?></b></p>
        <button type="button" name="button" id="exit" class="btn btn-primary">Logout</button>
        <div style="clear:both"></div>
    </div>
     
    <div id="chatbox"></div>
     
    <form id="ajaxform"  method="POST">
        <input name="usermsg" type="text" id="usermsg" size="63" />
        <input name="submitmsg" type="submit"  id="submitmsg" value="Send" />
    </form>
</div>
</div>
</body>
</html>