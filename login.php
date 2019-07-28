<?php
	include('config.php');
	include('header.php');
	if(isset($_POST['submit']))
	{
		
		$email=$_POST['email'];
		$password=$_POST['password'];
		
		$sql="SELECT * FROM `registration_table` WHERE `E-mail`='$email' AND `Password`='$password'";
		$run=mysqli_query($conn,$sql);
		$row=mysqli_num_rows($run);
		if($row < 1)
		{
?>
				<script>
					alert("Email or Password didnt match");
					window.open('login.php','_self');
				</script>
<?php
		}
		else
		{
			
			$data=mysqli_fetch_assoc($run);
			$custid = $data['Cust_id'];
			$user = $data['Firstname'];
			$user2 = $data['Lastname'];
			
			session_start();
			$_SESSION['uid']=$custid;
			$_SESSION['uname']=$user;
			$_SESSION['uname2']=$user2;
			header('location:index.php');
		?>	
			<script>
					alert("Welcome to Prodoself");
					window.open('index.php','_self');
				</script>
	<?php
		}
	
	}
?>

<!---->
<div class="login">
	 <div class="container">
		 <h2>Login</h2>
		 <div class="col-md-6 log">			 
				 <p>Welcome, please enter the folling to continue.</p>
				 <p>If you have previously Login with us, <span>Fill here</span></p>
				 <form action="" method="post">
					 <h5>Email:</h5>	
					 <input type="text" name="email">
					 <h5>Password:</h5>
					 <input type="password" name="password">					
					 <input type="submit" name="submit" value="submit">
					  <a href="#">Forgot Password ?</a>
				 </form>				 
		 </div>
		  <div class="col-md-6 login-right">
			  	<h3>NEW REGISTRATION</h3>
				<p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
				<a class="acount-btn" href="registration.php">Create an Account</a>
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