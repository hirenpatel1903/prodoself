<?php
		
		include('config.php');
		
		
		
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Prodoself an E-Commerce online Shopping</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/hover.css" rel="stylesheet" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shopper Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<!---- tabs---->
<link type="text/css" rel="stylesheet" href="css/easy-responsive-tabs.css" />
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion           
            width: 'auto', //auto or any width like 600px
            fit: true,   // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#tabInfo');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });

        $('#verticalTab').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true
        });
    });
</script>
<!---- tabs---->

</head>
<body>
<!---->
<div class="header">
	 <div class="container">
		 <div class="header-left">
			 <div class="top-menu">
				 <ul>
				 <li>
				 		<?php
						if(isset($_SESSION['uname']))
							{
								echo "<font color='orange'>" .$_SESSION['uname'].$_SESSION['uname2']."</font>";
							}
			?>
				 </li>
				 <li class="active"><a href="index.php">HOME</a></li>
				 <li><a href="woman.php">WOMAN</a></li>
				 <li><a href="man.php">MAN</a></li>	
				 <li><a href="t-shirt/index.php">T-shirt_Design</a></li>	
                 <?php if(isset($_SESSION['uname'])) { ?>
                 <li><a href="rarecoin.php">RARE COIN</a></li>	
				 <li><a href="dashboard.php">Dashboard</a></li><?php } ?>	 
				 </ul>
				 <!-- script-for-menu -->
				 <script>
						$("span.menu").click(function(){
							$(".top-menu ul").slideToggle("slow" , function(){
							});
						});
				 </script>
				 <!-- script-for-menu -->	 	 

			 </div>
		 </div>
		 
		 <div>
			 <a href="index.php"><font color="red"><h2><i>  &nbsp;&nbsp;&nbsp;&nbsp;PRODOSElF</i></h2></font></a>
		 </div>
		 <div class="header-right">
			 <div class="currency">			 
				 <a href="#"><i class="c1"></i></a>
				 <a class="active" href="#"><i class="c2"></i></a>
				 <a href="#"><i class="c3"></i></a>
				 <a href="#"><i class="c4"></i></a>
			 </div>		 
			 <div class="signin">
				  <div class="cart-sec">
                  
                  
                  
                  
                          <?php
						  
						  	
		if(isset($_SESSION['uid']))
		{
					$uid1=$_SESSION['uid'];
				 $sql123="SELECT * FROM `cart_detail` WHERE Cust_id='$uid1'"; 
		     $run1234=mysqli_query($conn,$sql123);
		      $row123=mysqli_num_rows($run1234);
		}
		else
		{
			$row123=0;
		}
			
			?>
				  <a href="cart.php"><img href="cart.php" src="images/cart.png" alt=""/>(<?php echo $row123;?>)</a></div>
				  <ul>
				  	<?php if(isset($_SESSION['uname'])) { ?>
						<h2><a href="logout.php"><font color="red" size="+1" >LogOut</font></a></h2>
						<?php }else { ?>
					 <li><a href="registration.php">REGISTRATION</a> <span>/<span> &nbsp;</li>
					 <li><a href="login.php"> LOGIN</a></li>
					 <?php } ?>
					 <li><a href="order.php"> Your Order</a></li>
				 </ul>			 
			 </div>
		 </div>
		 <div class="clearfix"></div>
	 </div>
</div>
<!---->
<script src="js/responsiveslides.min.js"></script>
  <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	speed: 500,
        manualControls: '#slider3-pager',
      });
    });
  </script>
</head>
<body>