<?php
session_start();
ob_start();

        $var=$_GET['var2'];
		$token= substr($var, strrpos($var, "/"));
		//echo $token;
		$hash2 = hash("sha256", $token);
		//echo $hash2;
		
		$_SESSION['a'][7]=$hash2;	
		$_SESSION['layer2']=$hash2;
		$_SESSION['login']=two;
		
		header('Location:login3.php');
?>