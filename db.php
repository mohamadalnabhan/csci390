<?php
$servername = "localhost";
$dbusername = "root"; // Your MySQL username
$dbpassword = ""; // Your MySQL password
$dbname = "CSCI390Project";

$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>