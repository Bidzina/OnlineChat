
<html>
<head>
	<title>Online Chat</title>
	<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body>
<div class="sign-in">
<form class="form-inline pull-right" role="form" action="signin.php" method="post">
  <div class="form-group">
    <label class="sr-only" for="exampleInputEmail2">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email" name="email">
  </div>
  <div class="form-group">
    <label class="sr-only" for="exampleInputPassword2">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" name = "password">
  </div>
  <button type="submit" class="btn btn-default" name="submit">Sign in</button>
</form>
</div>
<div class="sign-up-form form-margin-top">
<form class="form-horizontal" role="form" action="signup.php" method="post">
  <div class="form-group">
    <label for="firstname" class="col-sm-3 control-label">Firstname</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="firstname" placeholder="Enter your Firstname" name="firstname" required>
    </div>
  </div>
   <div class="form-group">
    <label for="lastname" class="col-sm-3 control-label">Lastname</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="lastname" placeholder="Enter your Lastname" name="lastname" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
    <div class="col-sm-9">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Enter your Email" name="email" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-3 control-label">Password</label>
    <div class="col-sm-9">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Enter your Password" name="password" required>
    </div>
  </div>
   <div class="form-group">
    <label for="inputPassword4" class="col-sm-3 control-label">Re-password</label>
    <div class="col-sm-9">
      <input type="password" class="form-control" id="inputPassword4" placeholder="Re-enter your Password" name="re-password" required>
    </div>
  </div>
  <div class="form-group">
    <label for="date" class="col-sm-3 control-label">Date</label>
    <div class="col-sm-9">
      <input type="date" class="form-control" id="date" name="bday" required>
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-3 control-label">Gender</label>
    <div class="col-sm-9 gender-margin-top">
      <input type="radio" name="sex" value="1" required>Male
	  <input type="radio" name="sex" value="2" required>Female
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
      <button type="submit" class="btn btn-success">Submit</button>
    </div>
  </div>
</form>
</div>
</body>
</html>