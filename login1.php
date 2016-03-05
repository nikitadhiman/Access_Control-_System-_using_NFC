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
window.location.href = "login1_1.php?var1=" + name;
}
</script>

<title>
Layer 1!
</title>
</head>
<?php	
if(isset($_SESSION['login']))
{


	if ($_SESSION['login']=='start')
	{
			echo '<center><h4>Image Layer 1/3';
			
			if(isset($_SESSION['selectagain']))
			{
	
				if ($_SESSION['selectagain']==0)
				{	
				echo '<font color="orange"><br>Your last selection sequence of images was wrong ! Start Fresh again !</font>';
				$_SESSION['selectagain']==1;
				}
			}


	$name = $_SESSION['uname'];
	echo'<i><br>Selecting any image will redirect you the next layer !<br><br>
	Choose your Image ::<br><br>';
	$arr = array(0,1,2,3,4,5,6,7,8);
	shuffle($arr);
	$i=array("images/$name/a.jpg","images/$name/b.jpg","images/$name/c.jpg","images/$name/d.jpg","images/$name/e.jpg","images/$name/f.jpg","images/$name/g.jpg","images/$name/h.jpg","images/$name/i.jpg");
	
	echo '<center>
	<img src="'.$i[$arr[0]].'" onclick="changeIt(this)" height="200" width="200">
	<img src="'.$i[$arr[1]].'" onclick="changeIt(this)" height="200" width="200">
	<img src="'.$i[$arr[2]].'" onclick="changeIt(this)" height="200" width="200"><br>
	<img src="'.$i[$arr[3]].'" onclick="changeIt(this)" height="200" width="200">
	<img src="'.$i[$arr[4]].'" onclick="changeIt(this)" height="200" width="200">
	<img src="'.$i[$arr[5]].'" onclick="changeIt(this)" height="200" width="200"><br>
	<img src="'.$i[$arr[6]].'" onclick="changeIt(this)" height="200" width="200">
	<img src="'.$i[$arr[7]].'" onclick="changeIt(this)" height="200" width="200">
	<img src="'.$i[$arr[8]].'" onclick="changeIt(this)" height="200" width="200"></center>';
	echo '</div><a href="logout.php">Logout</font></a></center>
	</body>';
	}
	else
	{
		echo'<hr color="#CC0000"><font color="#ff2626"><center><h1>Access Denied!<br>The page your looking for cannot be found<br></h1><h2><a href="index.php">Click here to go back</a></h2></font><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>';
		session_destroy();
	}
		
}
	else
	{
		echo'<hr color="#CC0000"><font color="#ff2626"><center><h1>Access Denied!<br>The page your looking for cannot be found<br></h1><h2><a href="index.php">Click here to go back</a></h2></font><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>';
		session_destroy();
	}



?>
</body>
</html>