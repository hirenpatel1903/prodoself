<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
	error_reporting("");
	session_start();
	if(isset($_SESSION['admin']['status']))
	{
		header("location:index.php");	
	}
?>
<!DOCTYPE html>
<html>
<head>
<title>ProdoSlef Admin Login Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fashion Login Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> <!-- Font-Awesome-Icons-CSS -->

<!-- //Custom Theme files -->
<!-- web font --> 
<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
<!-- //web font --> 
</head>
<body>
	<!-- main -->
	<div class="main">
		<h1>ProdoSelf Admin Login Form</h1>
		<div class="main-w3lsrow">
			<!-- login form -->
			<div class="login-form login-form-left"> 
				<div class="agile-row">
					<h2>Login to your site</h2>
					<span class="fa fa-lock"></span>
					<div class="clear"></div>
					<div class="login-agileits-top"> 	
						<form action="login_process.php" method="post"> 
							<input type="text" class="name" name="r1" Placeholder="Admin Name" required=""/>
							<input type="password" class="password" name="r2" Placeholder="Password" required=""/>
							<input type="submit" value="Login"> 
						</form>  	
						<?php
						$msg = $_GET['msg'];  //GET the message
						if($msg!='') echo "<script> alert('$msg'); </script>"; //If message is set echo it
						?>
					</div> 
					<div class="login-agileits-bottom"> 
						<h6><a href="#">Forgot password?</a></h6>
					</div> 

				</div>  
			</div>  
		</div>	
		
		<!--			<div class="login-agileits-bottom1"> 
						<h3>or login with</h3>
					</div> 
					<div class="social_icons agileinfo">
						<ul class="top-links">
									<li><a href="#" class="facebook"><i class="fa fa-facebook"></i>facebook</a></li>
									<li><a href="#" class="twitter"><i class="fa fa-twitter"></i>twitter</a></li>
									<li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i>linkedin</a></li>
								</ul>
					</div>
		
		<!-- copyright -->
		<div class="copyright">
			<p> © 2018 ProdoSelf Login Form. All rights reserved.</p>
		</div>
		<!-- //copyright --> 
	</div>	
	<!-- //main --> 
</body>
</html>