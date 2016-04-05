<?php
session_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Registration Form with PHP Captcha Demo</title>

<link href="css/style_demo.css" rel="stylesheet" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script language="javascript">
$(document).ready(function(){

$(".refresh").click(function () {
    $(".imgcaptcha").attr("src","captcha.php?_="+((new Date()).getTime()));
    
});


 $('#register').submit(function() {
   
 if($('#password').val() != $('#cpassword').val()){
 	alert("Please re-enter confirm password");
 	$('#cpassword').val('');
 	$('#cpassword').focus();
 	return false;
 }

});

</script>

</head>
<body>
<div id="bodyfull">
<div id="bodyfull2">
	<div id="center">

		<div class="inner_right_demo"> 
		<form name="register" action="submit.php" method="post" id="register">
			<div class="form_box">
				<div>
					<label>First Name</label>
					<input type="text" placeholder="Enter Your First Name" id="fname" name="fname" required="required">
				</div>
				
				<div>
					<label>Last Name</label>
					<input type="text" placeholder="Enter Your Last Name" id="lname" name="lname" required="required">
				</div>
				
				<div>
					<label>Email</label>
					<input type="email" placeholder="Enter Your Email Address" id="email" name="email" required="required">
				</div>
				
				<div>
					<label>Phone</label>
					<input type="text" placeholder="Enter Your Phone Number" id="phone" name="phone">
				</div>
				
				<div>
					<label>Gender</label>
					<div class="otherinputs"><input type="radio" value="Male" checked name="gender"> <span>Male</span> <input type="radio" value="Female" name="gender"> <span>Female</span> </div>
				</div>
				
				<div>
					<label>User Name</label>
					<input type="text"  placeholder="Enter Your User Name" id="username" name="username" required="required">
				</div>
				
				<div>
					<label>Password</label>
					<input type="password"  placeholder="Enter Your Password" id="password" name="password" required="required">
				</div>
				
				<div>
					<label>Confirm Password</label>
					<input type="password"  placeholder="Enter Your Password Again" id="cpassword" name="cpassword" required="required">
				</div>
				
				<div>
					<label>Captcha</label>
					<input type="text" placeholder="Enter Code" id="captcha" name="captcha" class="inputcaptcha" required="required">
					<img src="captcha.php" class="imgcaptcha" alt="captcha"  />
				</div>
				
				<div>
					<label>&nbsp;</label>
					<div class="otherinputs" ><input type="submit" value="Submit" name="B1" class="submit"> &nbsp; &nbsp;<input type="reset" value="Reset" name="B2" class="submit"></div>
				</div>
			</div>
			</form>
		</div>

</div>	
</div>
</div>
</body>

</html>