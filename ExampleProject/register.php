<?php 
	$name = $_REQUEST['name'];
	$surname = $_REQUEST['surname'];
	$age = $_REQUEST['age'];
	$city = $_REQUEST['city'];
	$password = md5($_REQUEST['password']);
	require("connection.php");
	$query = "INSERT INTO users VALUES(null,'$name',
		'$surname',$age,'$city','$password',1)";
	if(!$con->query($query)){
		echo $con->error;
	}
?>