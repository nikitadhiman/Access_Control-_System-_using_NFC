<?php
session_start();
ob_start();
?>

<html>
<head>

<script src="md5.js"></script>
<script>
$('.photoset-grid-basic').photosetGrid();
function changeIt(img)
{
var name =img.src;
window.location.href = "regi1_1.php?var1=" + name;
}
</script>

<title>
Layer 1!
</title>
</head>
<?php

if(isset($_SESSION['registration']))
{


	if ($_SESSION['registration']=='gpas')
	{
			echo '<center><h4>Image Layer 1/3<br><font color="orange">Complete all the layers to complete your registration !</font><br><br>
Choose your Image ::<br><br>';
echo $_SESSION['registration'];
$name= $_SESSION['name'];
$arr = array(0,1,2,3,4,5,6,7,8);
shuffle($arr);
	$i=array("images/a_$name.jpg","images/b_$name.jpg","images/c_$name.jpg","images/d_$name.jpg","images/e_$name.jpg","images/f_$name.jpg","images/g_$name.jpg","images/h_$name.jpg","images/i_$name.jpg");

echo '<center>';
echo '<div class="photoset-grid-basic" data-layout="333">
<img src="'.$i[$arr[0]].'" onclick="changeIt(this)" height="200" width="200">
<img src="'.$i[$arr[1]].'" onclick="changeIt(this)" height="200" width="200">
<img src="'.$i[$arr[2]].'" onclick="changeIt(this)" height="200" width="200"><br>
<img src="'.$i[$arr[3]].'" onclick="changeIt(this)" height="200" width="200">
<img src="'.$i[$arr[4]].'" onclick="changeIt(this)" height="200" width="200">
<img src="'.$i[$arr[5]].'" onclick="changeIt(this)" height="200" width="200"><br>
<img src="'.$i[$arr[6]].'" onclick="changeIt(this)" height="200" width="200">
<img src="'.$i[$arr[7]].'" onclick="changeIt(this)" height="200" width="200">
<img src="'.$i[$arr[8]].'" onclick="changeIt(this)" height="200" width="200"></center>';
echo '</div></center>
</body>';
	}
	else
	{
		echo'<hr color="#CC0000"><font color="#ff2626"><center><h1>Access Denied!<br>The page your looking for cannot be found<br></h1><h2><a href="register.php">Click here to go back</a></h2></font><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>';
		session_destroy();
	}
		
}
	else
	{
		echo'<hr color="#CC0000"><font color="#ff2626"><center><h1>Access Denied!<br>The page your looking for cannot be found<br></h1><h2><a href="register.php">Click here to go back</a></h2></font><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>';
		session_destroy();
	}



?>
</html>