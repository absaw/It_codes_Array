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
    <title>Voting | Array</title>
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
  	<form class="form" method="post">
  		<label>Yes <span><input type="checkbox" name="y"></input></span></label></br>
  		<label>No <span><input type="checkbox" name="n"></input></span></label></br>
  		<label>Nota <span><input type="checkbox" name="nota"></input></span></label></br>
  		<input type="submit" value="submit"></input>
  </form>
  </body>