<?php
session_start();
ob_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="css/login.css" type="text/css"/>
<link rel="shortcut icon" href="photos/favicon.ico">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>

<script>
			function validate()
			{
			var name=document.forms["login"]["name"].value;
			var password=document.forms["login"]["password"].value;
			
			
			if ((password==null || password=="") && !(name==null || name==""))
			{
			alert("Please enter your password !!");return false;
			}
			
			if (!(password==null || password=="") && (name==null || name=="")  )
			{
			alert("Please enter your name !!");return false;
			}
			
			if ((name==null || name=="") && (password==null || password==""))
			{
			alert("Please enter your name !! \nPlease enter your password !!");return false;
			}
			else
			return true;
			}
			
		</script>
		<noscript>Your Javascript is off !! </noscript>

</head>

<body text="#FFFFFF" marginwidth="45">
<?php
include("connect.php");
if(!isset($_POST['submit']))
{
echo'<center> <div class="login">
  <div class="heading">
    <h1><font color="white" family="Times New Roman">Sign in</font></h1>
    <form name="login" action="index.php" method="post" onSubmit="return validate();" 

      <div class="input-group input-group-lg">
        <span class="input-group-addon"><i class="fa fa-user"></i></span>
        <input type="text" name="name" class="form-control" placeholder="Username or email">
          </div>

        <div class="input-group input-group-lg">
          <span class="input-group-addon"><i class="fa fa-lock"></i></span>
          <input type="password" name="password" class="form-control" placeholder="Password">
        </div>

        <input type="submit" value="Login" name="submit">
       </form>
 		</div>
 </div> </center>
<p align="center">
<font color="white">If you are not registered then register <i><a href="signup.php">here</font></a></i><br></p><br><br><br><br><br><br><br><br><br><br><br><br>';
}
		else
		{
			session_start();
			$name=$_POST['name'];
			$password=$_POST['password'];
			$query="select * from user where username='$name' and password='$password'" ;
			//echo $query;
			$result=mysqli_query($con,$query);
			if($result)
			{
				$rows=mysqli_num_rows($result);
				if($rows>0)
				{ 
					
					$row=mysqli_fetch_array($result);
					//if($row[5]==1)
					$_SESSION['uname']=$name;
					$_SESSION['login']=start;
					header('Location:login1.php');
					
				}
				else
				{	
				$query="select * from user where username='$name' and password='$password'" ;
				$result=mysqli_query($con,$query);
				$row=mysqli_fetch_array($result);
				$rows=mysqli_num_rows($result);
				if($rows==0)
				echo'<hr color="#CC0000"><font color="white"><center><h1>No such user exists in our database !<br>Maybe you entered something wrong !<br></h1><h2><a href="index.php">Click here to go back</a></h2></font><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>';
				}
			}
		}
?>
</body>
</html>