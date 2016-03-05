<?php
session_start();
ob_start();
?>
<html>
<head>
<title>
Successful!!
</title>
</head>
<body> You successfully selected the image sequence ! <br>
</div><a href="logout.php">Logout</font></a></center>

<?php
include('connect.php');		
include('cryptography.php');
$var=$_GET['var3'];
		$token= substr($var, strrpos($var, "/"));
		$hash3 = hash("sha256", $token);
$_SESSION['layer3']=$hash3;
$name=$_SESSION['uname'];
$layer1=$_SESSION['layer1'];
$layer2=$_SESSION['layer2'];
$layer3=$_SESSION['layer3'];

$combo = $layer1.$layer2.$layer3;
$newhash = hash("sha256", $combo);


$result=mysqli_query($con,"select combo from user where username='$name'");
		if (mysqli_num_rows($result)>0)
		{
		$row=mysqli_fetch_array($result);
		/*echo '<br>In database : <br>'.$row[0].'<br>';
		echo '<br>My selection :<br>';
		
		echo ''.$newhash.'<br>';*/
		
			if($row[0]==$newhash)	
			{
				header('Location:decode');
				$_SESSION['decode']= $newhash;
				$_SESSION['login']= graphical;
				
			}
			
			else 
			{
				$_SESSION['selectagain']=0;
				$_SESSION['login']= 'start';
				header('Location:login1.php');
				
			}
		} 

?>
</body>
</html>