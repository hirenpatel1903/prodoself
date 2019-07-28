<?php

	
		
			include('config.php');
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
	    $sql="INSERT INTO `cart_detail`(Cust_id,Product_id,product_size) VALUES ('$uid','$pid','$psize')"; 
	    $result=mysqli_query($conn,$sql);
		//echo $result;
	
	}
	
	
	include('header.php');
	
	
	

	
	
	//session_start();
		
		
		
	
		
	
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
<title>Cart</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shopping Cart Widget Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/style1.css" rel="stylesheet" type="text/css" media="all" />
<link href='//fonts.googleapis.com/css?family=Signika:400,300,600,700' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script>$(document).ready(function(c) {
	$('.alert-close').on('click', function(c){
		$('.message').fadeOut('slow', function(c){
	  		$('.message').remove();
		});
	});	  
});
</script>
<script>$(document).ready(function(c) {
	$('.alert-close1').on('click', function(c){
		$('.message1').fadeOut('slow', function(c){
	  		$('.message1').remove();
		});
	});	  
});
</script>
<script>$(document).ready(function(c) {
	$('.alert-close2').on('click', function(c){
		$('.message2').fadeOut('slow', function(c){
	  		$('.message2').remove();
		});
	});	  
});
</script>
</head>
<body>
	<!-- main -->
		<div class="main">
			<h1>Shopping Cart </h1>
			
            
           
			                <?php
				 $sql="SELECT * FROM `cart_detail` WHERE Cust_id='$uid'"; 
		     $run=mysqli_query($conn,$sql);
		      $row=mysqli_num_rows($run);

			
			?>
			<div class="main-grid2">
				<h2>My Shopping Bag (<?php echo $row; ?>)</h2>
				
				
                <div class="total">
		
        
        <?php  if(isset($_GET['b'])){
        	
             while($data=mysqli_fetch_assoc($run))
			   {
			   $sql1="SELECT * FROM `product_detail_table` WHERE Product_id='".$data['Product_id']."'";
		        $runs=mysqli_query($conn,$sql1);
				$data1=mysqli_fetch_assoc($runs);
				$product_name=$data1['Product_name'];
				$product_price=$data1['Product_price'];
				$product_image=$data1['Image'];
				$product_size=$data1['product_size'];
				
				?>
                
                
					
					<div class="total-left">
                    <p>Product Name :<span> <?php echo $product_name;?></span></p><br/>
                    <p><img src="admin/uploads/<?php echo $product_image; ?>" alt="" height="100px" width="100px" ></p>
						<p>Price :<span> <?php echo $product_price;?></span></p>
						
                        
                    
                        
					</div>
                    
                       
                     
                     
        <?php }}else{ 
		
		   while($data=mysqli_fetch_assoc($run))
			   {
			    $sql1="SELECT * FROM `product_detail_table` WHERE Product_id='".$data['Product_id']."'"; 
		        $runs=mysqli_query($conn,$sql1);
				$data1=mysqli_fetch_assoc($runs);
				$product_name=$data1['Product_name'];
				$product_price=$data1['Product_price'];
				$product_image=$data1['Image'];
				$product_size=$data1['product_size'];
		
		
		?>
        
       
         <div class="total-left">
                    <p>Product Name :<span> <?php echo $product_name;?></span></p><br/>
                    <p><img src="admin/uploads/<?php echo $product_image; ?>" alt="" height="100px" width="100px" ></p>
						<p>Price :<span> <?php echo $product_price;?></span></p>
					
					</div>
       
       
       
       
        <?php }}?>             
                     
                     
                     
					<div class="total-right">
						<a href="checkout.php">Check Out</a>
					</div>
					<div class="clear"> </div>
				</div>
               
                
			</div>
			<div class="copy-right">
		
			</div>
		</div>
	<!-- //main -->
</body>
</html>
		<?php
				
					include('footer.php');
				?>
