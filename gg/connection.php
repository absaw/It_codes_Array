<?php
$connection = mysqli_connect("localhost","root");
if(!$connection)
	echo "Failed to connect"."<br>";
$q1="create database gg_users;";
  mysqli_query($connection,$q1);
$dbconnect = mysqli_select_db($connection, "gg_users");
if(!$dbconnect)
	echo "Failed to connect to the database" . die(mysqli_error());
?>