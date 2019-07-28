<?php

	include('header.php');
	include('config.php');


?>
<!---->

<!---->
 <script>
    // You can also use "$(window).load(function() {"
    $(function () {
      // Slideshow 1
      $("#slider2").responsiveSlides({
         auto: true,
		 nav: true,
		 speed: 500,
		 namespace: "callbacks",
      });
    });
  </script>
    <script src="js/responsiveslides.min.js"></script>
<div class="single-section">
	 <div class="col-md-8 fashions2">
<?php
		$id = $_GET['id'];
		$sql="SELECT * FROM product_detail_table WHERE Product_id='$id'";
		$result=mysqli_query($conn,$sql);
		
		while($row=mysqli_fetch_array($result))
		{

?>			 
			<div class="slider2">
				<ul class="rslides rslider" id="slider2">				  
				  <li><img src="admin/uploads/<?php echo $row['Image']; ?>" alt="" ></li>
				  <li><img src="admin/uploads/<?php echo $row['Image']; ?>" alt=""></li>
				  <li><img src="admin/uploads/<?php echo $row['Image']; ?>" alt=""></li>
				  <li><img src="admin/uploads/<?php echo $row['Image']; ?>" alt=""></li>
				</ul>
		   </div>
<?php
	}	
?>
	  </div> 
	<div class="col-md-4 side-bar2">
		  <div class="product-price">
		  
<?php
		
		$sql="SELECT * FROM product_detail_table WHERE Product_id='$id'";
		$result=mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($result)
		  
?>
			   <div class="product-name">
				 <h2><?php  echo $row['Product_name']; ?></h2>
					<p><?php  echo $row['P_Description']; ?></p>
					<span><?php  echo "Rs.".$row['Product_price']; ?></span>
					<div class="clearfix"></div>
				
			  </div>	
			 <div class="product-id">
				 <h4>SELECT YOUR SIZE</h4>
                 
                  <form name="" method="post" action="cart.php?b=<?php echo $id;?>"/>
				  <div class="size select-size">					
					 <ul>
                    
						 <li><input type="radio" name="product_size" value="XS"/>XS</li>
                         <li><input type="radio" name="product_size" value="S"/>S</li>
                         <li><input type="radio" name="product_size" value="M"/>M</li>
                         <li><input type="radio" name="product_size" value="L"/>L</li>
                         <li><input type="radio" name="product_size" value="XL"/>XL</li>
						
					 </ul>
				 </div>
				 <br />
				 <div>
			<input name="submit" value="ADD TO BAG" type="submit" style="
    width: 80%;
	background-color:black;
    display: block;
    padding: 10px;
    font-size: 1.2em;
    font-weight: 400;
    border: none;
    color: white;
    border-radius: 5px;
    outline: none;">
				 
                 
                 </form>
				 </div>
			 </div>
		 </div>
      </div>
	      	 
	 <div class="clearfix"></div>
</div>
<!---->
<?php

	include('footer.php');
?>
		