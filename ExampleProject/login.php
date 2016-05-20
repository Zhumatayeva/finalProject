<?php 
	$name = $_REQUEST['name'];
	$password = md5($_REQUEST['password']);
	require("connection.php");
	$query = "SELECT * FROM users WHERE name='$name'
	 AND password='$password'";
	if($row = $con->query($query)->fetch_assoc()){
		session_start();
		$_SESSION['name'] = $row['name'];
		$_SESSION['uid'] = $row['id'];
		$_SESSION['surname'] = $row['surname'];
		$_SESSION['city'] = $row['city'];
		$_SESSION['age'] = $row['age'];
		$_SESSION['status'] = $row['status'];
		header("Location:profile.php");
	}else{
		$con->error;
	}
?>