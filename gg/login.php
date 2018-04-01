<?php
session_start();
require("connection.php");
if(isset($_POST) & !empty($_POST))
{
	$username = mysqli_real_escape_string($connection, $_POST['username']);
	$password = md5($_POST['password']);
	$sql = "SELECT * FROM user WHERE username = '$username' and password = '$password';";
	$result = mysqli_query($connection, $sql);
	$count = mysqli_num_rows($result);
	if($count == 1)
	{
		$_SESSION['username'] = $username;
		header('location:http://localhost/gg/user_login.php');
	}
	else
	{
		echo "Invalid login";
	}
}
?>

<!doctype html>
<html>
  <head>
    <title>Log-in | Array</title>
    <style>
  </style>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="loginpic.jpg" type="image/x-icon">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="bootstrap.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="bootstrap.css" />
	<script src="jquery.js"></script>
    <script src="bootstrap.js"></script>
  </head>
  <body>


  <div class="container-fluid">
  <br/><br/><h1 style="text-align:center;">Log-in Form</h1></div><br/><br/><br/>
    <form class="form-horizontal" method="post">
	  <div class="form-group">
	    <label for="email" class="control-label col-sm-4">User Name</label>
	    <div class="col-sm-4"><input class="form-control" type="text" placeholder="User Name" id="email" name="username" required/></div>
	  </div>
	  <div class="form-group">
	    <label for="password" class="control-label col-sm-4">Password:</label>
		<div class="col-sm-4">
	    <input class="form-control" type="password" placeholer="Password" id="password" name="password" required/></div>
	  </div>
	  <div class="form-group">        
      <div class="col-sm-offset-4 col-sm-4">
        <div class="checkbox">
          <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
      </div>
    </div>
	<div class="form-group">        
      <div class="col-sm-offset-4 col-sm-2">
        <button type="submit" class="btn btn-success">Log-in</button>
      </div>
	  <div class="col-sm-2">
        <button type="reset" class="btn btn-warning">Reset</button>
      </div>
    </div>
	<div class="form-group">
	<div class="col-sm-offset-4 col-sm-4">
	<h3>Or Create an Account
	<a href="signup.php">Sign-up</a></h3>
	</div></div>
	</form>
  </div>


<br/>
<br/>
<hr width="75%" align="center"/>
     <div class="footer-bottom">
        <div class="container">
            <div class="text" style="font-size:20px;color:black;text-align:center;">
                <p>Copyright &copy; 2018, <span style="color:maroon;">Array</span> | All Right Reserved.</p>
            </div>
        </div>
    </div>

  
  </body>
</html>
