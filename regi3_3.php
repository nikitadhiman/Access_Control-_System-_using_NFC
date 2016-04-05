<?php	
session_start();
ob_start();

	$var=$_GET['var'];
    $_SESSION['a'][8]=$_GET['var'];
	header(Location:stegafy);
	
?>