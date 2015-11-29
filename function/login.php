<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
echo '<script type="text/javascript">alert("' . $error . '");</script>';
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];

// Establishing Connection with Server by passing server_name, user_id and password as a parameter
require_once 'function/config.php';
$conn = db2_connect($database, $user, $dbpassword);

// SQL query to fetch information of registerd users and finds user match.
$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$query = db2_exec($conn,$sql);
$row = db2_fetch_array($query);

if(!empty($row)){
		session_regenerate_id();
		$_SESSION['SESS_ID'] = $row[0];
		$_SESSION['SESS_USERNAME'] = $username;
		session_write_close();
		echo '<script type="text/javascript">alert("Successfully Login!");</script>';
		header("Location: view/home.php");
	}else{
		$error = "Username or Password is invalid";
		echo '<script type="text/javascript">alert("' . $error . '");</script>';
	}

db2_close($conn); // Closing Connection
}
}

?>