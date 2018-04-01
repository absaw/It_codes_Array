<?php
  
  require_once("connection.php");
	  if(isset($_POST['y']))
	  {
		  $q1="create table yes (name varchar(255), rollno int(255) unique)";
		  mysqli_query($connection,$q1);
		  //$q2="insert into yes (name, rollno) value(".$_SESSION['firstname']."".$_SESSION['rollno'].")";
		  //mysqli_query($connection,$q2);
	  }
	  else if(isset($_POST["n"]))	  
	  {
		  $q3="create table no (name varchar(255), rollno int(255) unique)";
		  mysqli_query($connection,$q3);
		  //$q4="insert into no (name, rollno) value(".$_SESSION['firstname']."".$_SESSION['rollno'].")";
		  //mysqli_query($connection,$q4);
	  }
	  else if(isset($_POST["nota"]))
	  {
	  	  $q3="create table nota (name varchar(255), rollno int(255) unique)";
		  mysqli_query($connection,$q3);
		  //$q4="insert into nota (name, rollno) value(".$_SESSION['firstname']."".$_SESSION['rollno'].")";
		  //mysqli_query($connection,$q4);
	  }
  mysqli_close($connection);
?>

<!doctype html>
<html>
  <head>
  	<head>
    <title>Polling-Booth | Array</title>
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
	<script>
		function fetchcourse(str)
	  {
		  var req=new XMLHttpRequest();
		  req.open("get","http://localhost/gg/course.php?course="+str,true);
		  req.send();
		  req.onreadystatechange=function()
		  {
			  if(req.readyState==4 && req.status==200)
			  {
				  document.getElementById("course").innerHTML=req.responseText;
			  }
		  };
	  }
	  

	</script>
  </head>
  <body>
  	<div class="header" style="text-align:center;font-color:khaki;font-size:30px;margin:20px;">GG | Pooling-Booth</div>
    <div class="container">
	  <form class="form-horizontal" action="#" method="post">
		<div class="form-group">
			<label class="control-label">Semester:</label>
		  <select onchange="fetchcourse(this.value)" class="form-control">
		    <option>Choose Semester</option>
			<option>III</option>
			<option>IV</option>
			<option>V</option>
			<option>VI</option>
			<option>VII</option>
			<option>VIII</option>
		  </select>
		</div>
		<div class="form-group">
			<label class="control-form">Subject:</label>
		  <select id="course" class="form-control">
		    <option>Select Semester first!!</option>
		  </select>
		</div>
		<div class="form-group">
			<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Submit</button>
		</div>
	  </form>
	</div>
	<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Vote for GG</h4>
      </div>
      <div class="modal-body">
    <form class="form" method="post">
  		<label class="control-label">Yes <span><input type="checkbox" name="y"></input></span></label></br>
  		<label class="control-label">No <span><input type="checkbox" name="n"></input></span></label></br>
  		<label class="control-label">Nota <span><input type="checkbox" name="nota"></input></span></label></br>
  		<input type="submit" value="submit"></input>
  	</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
  </body>
</html>