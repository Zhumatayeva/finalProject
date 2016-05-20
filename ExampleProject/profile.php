<?php 
	session_start();
	if(!isset($_SESSION['uid'])){
		header("Location:./");
	}
	echo "Hello ".$_SESSION['name']." 
	".$_SESSION['surname']." ";
?>
<a href="logout.php">Logout</a>