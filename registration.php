<?php
	include('header.php');
	include('config.php');
	
	if(isset($_POST['submit']))
	{
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
			{
  ?>
  				<script>
				alert("Enter valid Email Address");
				window.open('registration.php','_self');
				</script>
<?php
				exit();
			}
		$password = $_POST['password'];
		$repeatpass = $_POST['repeatpass'];
			if($repeatpass != $password)
			{
?>
				<script>
				alert("password didnt match");
				window.open('registration.php','_self');
				</script>
<?php
			}
			$contact = $_POST['contact'];
			
			$sql = "INSERT INTO `registration_table`(`Cust_id`, `Firstname`, `Lastname`, `E-mail`, `Password`, `Confirm_password`, `Phone_no`) VALUES ('','$fname','$lname','$email','$password','$repeatpass','$contact')";
			
			
			$result = mysqli_query($conn,$sql);
?>
					<script>
				alert("registration succesfully");
				window.open('login.php','_self');
				</script>
<?php
	}
?>
<div class="registration-form">
	 <div class="container">
		 <h2>Registration</h2>
		 <div class="col-md-6 reg-form">
			 <div class="reg">
				 <p>Welcome, please enter the folling to continue.</p>
				 <p>If you have previously registered with us, <a href="#">click here</a></p>
				 <form action="" method="post">
					 <ul>
						 <li class="text-info">First Name: </li>
						 <li><input type="text" name="fname" required=""></li>
					 </ul>
					 <ul>
						 <li class="text-info">Last Name: </li>
						 <li><input type="text" name="lname" required=""></li>
					 </ul>				 
					<ul>
						 <li class="text-info">Email: </li>
						 <li><input type="text" name="email" required=""></li>
					 </ul>
					 <ul>
						 <li class="text-info">Password: </li>
						 <li><input type="password" name="password" required=""></li>
					 </ul>
					 <ul>
						 <li class="text-info">Re-enter Password:</li>
						 <li><input type="password" name="repeatpass" required=""></li>
					 </ul>
					 <ul>
						 <li class="text-info">Mobile Number:</li>
						 <li><input type="text" name="contact" required=""></li>
					 </ul>						
					 <input type="submit" name="submit" value="submit">
					 <p class="click">By clicking this button, you agree to my modern style <a>Pollicy Terms and Conditions</a> to Use</p> 
				 </form>
			 </div>
		 </div>
		 <div class="col-md-6 reg-right">
			 <h3>Completely Free Accouent</h3>
			 <p>Pellentesque neque leo, dictum sit amet accumsan non, dignissim ac mauris. Mauris rhoncus, lectus tincidunt tempus aliquam, odio 
			 libero tincidunt metus, sed euismod elit enim ut mi. Nulla porttitor et dolor sed condimentum. Praesent porttitor lorem dui, in pulvinar enim rhoncus vitae. Curabitur tincidunt, turpis ac lobortis hendrerit, ex elit vestibulum est, at faucibus erat ligula non neque.</p>
			 <h3 class="lorem">Lorem ipsum dolor sit amet elit.</h3>
			 <p>Tincidunt metus, sed euismod elit enim ut mi. Nulla porttitor et dolor sed condimentum. Praesent porttitor lorem dui, in pulvinar enim rhoncus vitae. Curabitur tincidunt, turpis ac lobortis hendrerit, ex elit vestibulum est, at faucibus erat ligula non neque.</p>
		 </div>
		 <div class="clearfix"></div>
		 <div class="navigation">
			 <ul>
				 <li><a href="about.html">ABOUT</a></li>
				 <li><a href="woman.html">STOCKITS</a></li>
				 <li><a href="contact.html">CONTACT</a></li>
				 <li><a href="man.html">STORE</a></li>
				 <li><a href="terms.html">TERMS & CONDITION</a></li>
				 <li><a href="man.html">SHOW TO BUY</a></li>
				 <li><a href="404.html">SHIPPING</a></li>
				 <li><a href="404.html">RETURNS</a></li>
				 <li><a href="single.html">SIZE CHART</a></li>
			 </ul>
		 </div>
	 </div>
</div>
<!---->
<?php

		include('footer.php');

?>