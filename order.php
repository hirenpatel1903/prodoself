<?php
		 include('config.php');	
		 include("header.php");
		
		
		if(!isset($_SESSION['uid']))
		{
			
			header("location:login.php"); 
			exit;
		}
		
		$uid=$_SESSION['uid'];
	
	if(isset($_GET['b']))
	{
		$uid=$_SESSION['uid']; 
		$pid=$_GET['b'];
		//$pqty=$_POST['product_qty'];
		$psize=$_POST['product_size'];
		$price=$_POST['price'];
	    $sql="INSERT INTO pro_order_detail_table(Cust_id,Product_id,product_size,Product_price) VALUES ('$uid','$pid','$psize','$price')"; 
	    $result=mysqli_query($conn,$sql);
		//echo $result;
	
	}
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
<title>Shopper an E-Commerce online Shopping Category Flat Bootstarp responsive Website Template| Cart :: w3layouts</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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



<!--CONTACT-->
<div class="contact">
	 <div class="container">		 
		 <div class="contact-head">		
				<h2>Your Order Detail</h2>			 
				
		 </div>
		 <div class="col-md-8 contact-left">
		
		<table border="1" height="200px" width="200px">
	
			

				<tr>
					<th>Order Id</th>
					<th>User_id</th>
					<th>Product_Id</th>
					<th>Product_size</th>
					<th>Product Price</th>
				</tr>
					<?php
					
					$row=mysqli_num_rows($run);
		 			while($data=mysqli_fetch_assoc($run))
			  		 {
			
		?>	
				<tr>
					<td><?php  echo $data['']; ?></td>
					<td><?php  echo $data[$uid]; ?></td>
					<td><?php  echo $data[$pid]; ?></td>
					<td><?php  echo $data[$psize]; ?></td>
					<td><?php  echo $data[$price]; ?></td>
					<td></td>
				
				</tr>
			
		<?php
			}
		
		?>
		</table>
		 </div>
		 
		 <div class="clearfix"></div>		 
			<!---->
		
			<!---->
	 </div>	 
</div>
<!--CONTACT Ends-->
<!---->
<?php include("footer.php");?>
<!---->		
</body>
</html>