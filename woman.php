<?php

	include('header.php');

?>
<!---->
<div class="men-fashions">
	 <div class="container">		 
		 <div class="col-md-9 fashions">
			 <div class="title">
				 <h3>TOPS - TITLE</h3>
			 </div>
			 <div class="fashion-section">
				 <div class="fashion-grid1">
<?php
$start=0; // limit=1,2;
$limit=3; // limit=2,2;
$t=mysqli_query($conn,"select * from product_detail_table");
$total=mysqli_num_rows($t);
if(isset($_GET['id']))
{
	$id=$_GET['id'];	//$start=2*1;
	$start=($id-1)*$limit;	//$start=2;
}
else
{
	$id=1;
}
$page=ceil($total/$limit);
		
		$sql="SELECT * FROM `product_detail_table` WHERE Category_id='6' limit $start,$limit";
		$result=mysqli_query($conn,$sql);
		
		while($row=mysqli_fetch_array($result))
		{
?>		
					 <div class="col-md-4 fashion-grid">
						 <a href="single.php?id=<?php echo $row['Product_id']; ?>"><img src="admin/uploads/<?php echo $row['Image']; ?>" alt=""/>
							 <div class="product">
								 <h3><?php echo $row["Product_name"]; ?></h3>
								 <p><span></span> <?php echo "Rs.".$row["Product_price"]; ?></p>								 
							 </div>							 
						 </a>
						 <div class="fashion-view"><span></span>
									<div class="clearfix"></div>
								 <h4><a href="single.php?id=<?php echo $row['Product_id']; ?>">Quick View</a></h4>
						 </div>
					 </div>
						
<?php
	}

?>
					 <div class="clearfix"></div>
					 <center><ul class="pagination">
	 <?php if($id > 1) {?> <li><a href="?id=<?php echo ($id-1) ?>">Previous</a></li><?php }?>
	 <?php
	 for($i=1;$i <= $page;$i++){
	 ?>
		<li><a href="?id=<?php echo $i ?>"><?php echo $i;?></a></li>
	  <?php
	 }
	  ?>
	<?php if($id!=$page) //3!=4
	{?> 
	  <li><a href="?id=<?php echo ($id+1); ?>">Next</a></li>
	<?php }?>
 </ul></center>
				 </div>
			 </div>
		 </div>
		 <div class="col-md-3 side-bar">
			  <div class="categories">
					<h3>CATEGORIES</h3>
				  <ul>
						<li><a href="#">accessories</a></li>
						<li><a href="#">basics</a></li>
						<li><a href="#">jackets</a></li>
						<li><a href="#">jeans</a></li>
						<li><a href="#">knits</a></li>
						<li><a href="#">overalls</a></li>
						<li><a href="#">over coats</a></li>
						<li><a href="#">shoes</a></li>
						<li><a href="#">sweatshirts</a></li>
						<li><a href="#">nities</a></li>
						<li><a href="#"><del>tops</del></a></li>
						<li><a href="#">watersuits</a></li>
				  </ul>
			  </div>
			  <div class="sales">
				 <h3>SALE</h3>
				 <div class="pricing">
					 <h4>Price range</h4>
					 <input type="text" placeholder="price from" required/>
					 <input type="text" placeholder="price to" required/>
					 <div class="clearfix"></div>
				 </div>
				 <div class="size">
					 <h4>Size</h4>
					 <ul>
						 <li><a href="#">XS</a></li>
						 <li><a href="#">S</a></li>
						 <li><a href="#">M</a></li>
						 <li><a href="#">L</a></li>
						 <li><a href="#">XL</a></li>
					 </ul>
				 </div>
			  </div>
		 </div>
		 <div class="clearfix"></div>
	 </div>
</div>
<!---->
<?php

	include('footer.php');
?>