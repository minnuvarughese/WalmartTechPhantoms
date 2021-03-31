<?php

$host = "localhost";
$username = "root";
$password = "!@Minnu12";
$dbname= "db";
$con = mysqli_connect("localhost","dbusername","dbpassword","db");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>