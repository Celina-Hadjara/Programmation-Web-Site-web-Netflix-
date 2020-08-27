<?php
$server = "localhost";
$username = "root";
$password = "celina";
$db="Netflix";
// Create connection
$conn = mysqli_connect($server, $username,$password,$db);
// Check connection
if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}
?>