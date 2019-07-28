<?php

		include('header.php');

?>
 <div class="slider">
	  <div class="callbacks_container">
	     <ul class="rslides" id="slider">
	         <li>
				  <img src="images/bnr.jpg" alt="">
				  <div class="banner-info">
				  <h3>FASHIONS</h3>
				  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. consectetur adipiscing elit. consectetur adipiscing elit.</p>
				  </div>
	         </li>
	         <li>
				 <img src="images/bnr2.jpg" alt="">
	        	 <div class="banner-info">
	        	 <h3>CUSTOME-MADE</h3>
	          	 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. consectetur adipiscing elit. consectetur adipiscing elit.</p>
				 </div>
			 </li>
	         <li>
	             <img src="images/bnr3.jpg" alt="">
	        	 <div class="banner-info">
	        	 <h3>BRANDED CLOTHES</h3>
	          	 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. consectetur adipiscing elit. consectetur adipiscing elit.</p>
				 </div>
	         </li>
	      </ul>
	  </div>
  </div>
<!---->
<div class="tab-section">
	 <div class="wrap">
		 <div id="horizontalTab">
			   <ul class="resp-tabs-list">
					<li><a href="#">FEATURED</a></li>
					<li class="active"><a href="#">JUST ARRIVED</a></li>
					<li><a href="#">SALE</a></li>
					<div class="clearfix"></div>				
			   </ul>
			   <div class="resp-tabs-container">
				 <!---tab1----->
				 <div>
					 <div class="course_demo1">
							 <ul id="flexiselDemo1">
							 
<?php

		$sql="SELECT * FROM `product_detail` ORDER BY id ASC LIMIT 6";
		$result=mysqli_query($conn,$sql);
		
		while($row=mysqli_fetch_array($result))
		{
?>								 	
								 <li class="g1">						
									 <img src="admin/<?php echo $row['product_image']; ?>" alt="" />		
										<a href="single.php?id=<?php echo $row['id']; ?>"><div class="caption">
										<span></span>
										<h3><?php echo $row["product_name"]; ?></h3>
										<h5><?php echo "Rs.".$row["product_price"]; ?></h5>
										</div></a>
										<div class="clearfix"></div>
								 </li>
<?php
	}

?>
								
							 </ul>
						 </div>
						  <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
							<script type="text/javascript">
						 $(window).load(function() {
							$("#flexiselDemo1").flexisel({
								visibleItems: 4,
								animationSpeed: 1000,
								autoPlay: true,
								autoPlaySpeed: 3000,    		
								pauseOnHover: true,
								enableResponsiveBreakpoints: true,
								responsiveBreakpoints: { 
									portrait: { 
										changePoint:480,
										visibleItems: 1
									}, 
									landscape: { 
										changePoint:640,
										visibleItems: 2
									},
									tablet: { 
										changePoint:768,
										visibleItems: 3
									}
								}
							});
							
						 });
						  </script>
						<script type="text/javascript" src="js/jquery.flexisel.js"></script>
				 </div>
				 <!---//tab1----->
				 <!---tab2----->
				 <div>
					 <div class="course_demo1">
							 <ul id="flexiselDemo2">	
								 <li class="g1">						
									 <img src="images/c4.jpg" alt="" />		
										<a href="single.html"><div class="caption">
										<span></span>
										<h3>PRODUCT NAME</h3>
										<h5>180.00 &euro;</h5>
										</div></a>
										<div class="clearfix"></div>
								 </li>
								 <li class="g1">						
									 <img src="images/c3.jpg" alt="" />
									 <a href="single.html"><div class="caption">
										<span></span>
										<h3>PRODUCT NAME</h3>
										<h5>180.00 &euro;</h5>
										</div></a>
										<div class="clearfix"></div>
								 </li>
								 <li class="g1">						
									 <img src="images/c2.jpg" alt="" />					
									 <a href="single.html"><div class="caption">
										<span></span>
										<h3>PRODUCT NAME</h3>
										<h5>180.00 &euro;</h5>
										</div></a>
										<div class="clearfix"></div>
								 </li>
								 <li class="g1">						
									 <img src="images/c1.jpg" alt="" />					
									 <a href="single.html"><div class="caption">
										<span></span>
										<h3>PRODUCT NAME</h3>
										<h5>180.00 &euro;</h5>
										</div></a>
										<div class="clearfix"></div>
								 </li>
								 <li class="g1">						
									 <img src="images/c4.jpg" alt="" />					
									 <a href="single.html"><div class="caption">
										<span></span>
										<h3>PRODUCT NAME</h3>
										<h5>180.00 &euro;</h5>
										</div></a>
										<div class="clearfix"></div>
								 </li>
								 <li class="g1">						
									 <img src="images/c1.jpg" alt="" />					
									<a href="single.html"><div class="caption">
										<span></span>
										<h3>PRODUCT NAME</h3>
										<h5>180.00 &euro;</h5>
										</div></a>
										<div class="clearfix"></div>
								 </li>
							 </ul>
						 </div>
						  <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
							<script type="text/javascript">
						 $(window).load(function() {
							$("#flexiselDemo2").flexisel({
								visibleItems: 4,
								animationSpeed: 1000,
								autoPlay: true,
								autoPlaySpeed: 3000,    		
								pauseOnHover: true,
								enableResponsiveBreakpoints: true,
								responsiveBreakpoints: { 
									portrait: { 
										changePoint:480,
										visibleItems: 1
									}, 
									landscape: { 
										changePoint:640,
										visibleItems: 2
									},
									tablet: { 
										changePoint:768,
										visibleItems: 3
									}
								}
							});
							
						 });
						  </script>
						<script type="text/javascript" src="js/jquery.flexisel.js"></script>
				 </div>
				 <!---//tab2----->
				 <!---tab3----->
				 <div>
					 <div class="course_demo1">
							 <ul id="flexiselDemo3">	
								 <li class="g1">						
									 <img src="images/c1.jpg" alt="" />		
										<a href="single.html"><div class="caption">
										<span></span>
										<h3>PRODUCT NAME</h3>
										<h5>180.00 &euro;</h5>
										</div></a>
										<div class="clearfix"></div>
								 </li>
								 <li class="g1">						
									 <img src="images/c2.jpg" alt="" />
									 <a href="single.html"><div class="caption">
										<span></span>
										<h3>PRODUCT NAME</h3>
										<h5>180.00 &euro;</h5>
										</div></a>
										<div class="clearfix"></div>
								 </li>
								 <li class="g1">						
									 <img src="images/c3.jpg" alt="" />					
									 <a href="single.html"><div class="caption">
										<span></span>
										<h3>PRODUCT NAME</h3>
										<h5>180.00 &euro;</h5>
										</div></a>
										<div class="clearfix"></div>
								 </li>
								 <li class="g1">						
									 <img src="images/c4.jpg" alt="" />					
									 <a href="single.html"><div class="caption">
										<span></span>
										<h3>PRODUCT NAME</h3>
										<h5>180.00 &euro;</h5>
										</div></a>
										<div class="clearfix"></div>
								 </li>
								 <li class="g1">						
									 <img src="images/c1.jpg" alt="" />					
									 <a href="single.html"><div class="caption">
										<span></span>
										<h3>PRODUCT NAME</h3>
										<h5>180.00 &euro;</h5>
										</div></a>
										<div class="clearfix"></div>
								 </li>
								 <li class="g1">						
									 <img src="images/c3.jpg" alt="" />					
									<a href="single.html"> <div class="caption">
										<span></span>
										<h3>PRODUCT NAME</h3>
										<h5>180.00 &euro;</h5>
										</div></a>
										<div class="clearfix"></div>
								 </li>
							 </ul>
						 </div>
						  <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
							<script type="text/javascript">
						 $(window).load(function() {
							$("#flexiselDemo3").flexisel({
								visibleItems: 4,
								animationSpeed: 1000,
								autoPlay: true,
								autoPlaySpeed: 3000,    		
								pauseOnHover: true,
								enableResponsiveBreakpoints: true,
								responsiveBreakpoints: { 
									portrait: { 
										changePoint:480,
										visibleItems: 1
									}, 
									landscape: { 
										changePoint:640,
										visibleItems: 2
									},
									tablet: { 
										changePoint:768,
										visibleItems: 3
									}
								}
							});
							
						 });
						  </script>
						<script type="text/javascript" src="js/jquery.flexisel.js"></script>
				 </div>
				 <!---//tab3----->
			 </div>
		 </div>
	 </div>
	 <div class="container">
		 <div class="navigation">
			 <ul>
				 <li><a href="about.php">ABOUT</a></li>
				 <li><a href="woman.php">STOCKITS</a></li>
				 <li><a href="contact.html">CONTACT</a></li>
				 <li><a href="man.php">STORE</a></li>
				 <li><a href="terms.html">TERMS & CONDITION</a></li>
				 <li><a href="man.php">SHOW TO BUY</a></li>
				
				 <li><a href="man.php">RETURNS</a></li>
				 <li><a href="single.php">SIZE CHART</a></li>
			 </ul>
		 </div>
	 </div>
</div>
<!---->

		