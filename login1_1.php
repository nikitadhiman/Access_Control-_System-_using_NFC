<?php
session_start();
ob_start();



        $var=$_GET['var1'];
		$token= substr($var, strrpos($var, "/"));
		//echo $token;
		$hash1 = hash("sha256", $token);
		//echo $hash1;
		
		$_SESSION['a'][6]=$hash1;	
		$_SESSION['layer1']=$hash1;
		$_SESSION['login']=one;
		
		header('Location:login2.php');
?>