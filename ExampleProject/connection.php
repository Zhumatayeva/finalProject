<?php 
	$con = new mysqli("localhost","root","","ExampleProject");
	if(!$con){
		die($con->error);
	}
?>