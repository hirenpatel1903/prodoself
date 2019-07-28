<?php
	error_reporting("");
	include 'include/db.php';
	$db1=mysqli_query($con,"select * from pro_category_table");
	$db2=mysqli_query($con,"slect * from registration_table");
	$db3=mysqli_query($con,"select * from category_table");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Simple Responsive Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

								<script language="JavaScript" >
  
  function getproduct()
   {
	    
	     var cid=document.f1.r2.value;
     
		var xmlhttp = new XMLHttpRequest();
		 
		   xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("productdiv").innerHTML = this.responseText;
            }
        };
		
       xmlhttp.open("GET","getproduct.php?cid="+cid,true);
      //  xmlhttp.open("GET","ui.php?cid="+cid,true);
      
	    xmlhttp.send();
		  
   }
   function getcoin()
   {
	    
	     var coid=document.f2.r3.value;
     
		var xmlhttp = new XMLHttpRequest();
		 
		   xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("productdiv2").innerHTML = this.responseText;
            }
        };
		
       xmlhttp.open("GET","getcoin.php?coid="+coid,true);
      //  xmlhttp.open("GET","ui.php?cid="+cid,true);
      
	    xmlhttp.send();
		  
   }
</script>

</head>
<body>
     
           
          
    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img src="assets/img/logo.png" />
                    </a>
                </div>
              
                 <span class="logout-spn" >
                  <a href="#" style="color:#fff;">LOGOUT</a>  

                </span>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                 


                     <li> 
                        <a href="index.php" ><i class="fa fa-desktop "></i>Dashboard <span class="badge">Included</span></a>
                    </li>
                   

                    <li class="active-link">
                        <a href="ui.php"><i class="fa fa-table "></i>UI Elements  <span class="badge">Included</span></a>
                    </li>
                   
                </ul>
                            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
          <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>BASIC UI ELEMENTS</h2>
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                
                   
                    <div class="col-lg-6 col-md-6">
                        <h5>Buttons Samples</h5>
                       <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo">Customers</button>
					   					<div id="demo" class="collapse">
										
												<?php
												
														$sql="select *from registration_table";
														$result=mysqli_query($con,$sql);
														$run=mysqli_num_rows($result);
														echo "total number of customers is".$run;				
												
												?>
												<table class="table">
														<thead>
																<tr>
																
																<th>Customer_id</th>
																<th>Customer_Firstname</th>
																<th>Customer_Lastname</th>
																<th>Customer_Contact</th>
																		
																</tr>
														</thead>
												<?php
														while($row=mysqli_fetch_array($result))
															{
												
												?>
														<tbody>
																	<tr>
																		<td><?php echo $row['Cust_id']; ?></td>
																		<td><?php echo $row['Firstname']; ?></td>
																		<td><?php  echo $row['Lastname'];?></td>
																		<td><?php  echo $row['Phone_no'];?></td>
																	</tr>
														</tbody>
												<?php
												
													}
												?>
												</table>
										
										</div>
										 <button type="button" class="btn btn-danger" data-toggle="collapse" data-target="#demo1">Products</button>
					   					<div id="demo1" class="collapse" style="overflow:hidden;">
										
										
										<form action="ui.php" method="post" name="f1">
		
												<select name="r2" placeholder="select Design" onChange="getproduct();">
		<?php
			while($row0=mysqli_fetch_array($db1))
			{
		?>
				<option value='<?php echo $row0["Category_id"]; ?>'><?php echo $row0["Category_name"];?></option>
			<?php
			}
		?></select>
						</form>
													<br><?php
													$id=$_POST["cid"];
														$sql="select *from product_detail_table p,pro_category_table c where p.Category_id=c.Category_id and p.Category_id='$id'";
														$result=mysqli_query($con,$sql);
														$run=mysqli_num_rows($result);
																		
														?>
														<div id="productdiv">
												<table class="table">
														<thead>
																<tr>
																
																<th>Product_Id</th>
																<th>Product_Name</th>
																<th>Product_price</th>
																
																		
																</tr>
														</thead>
												<?php
														while($row=mysqli_fetch_array($result))
															{
												
												?>
														<tbody>
																	<tr>
																		<td><?php echo $row['Product_id']; ?></td>
																		<td><?php echo $row['Product_name']; ?></td>
																		<td><?php  echo $row['Product_price'];?></td>
																	
																	</tr>
														</tbody>
												<?php
												
													}
												?>
												</table>
												</div>
								
										</div>
										                       <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo2">Coin</button>
					   					<div id="demo2" class="collapse">
										<form action="ui.php" method="post" name="f2">
		
												<select name="r3" placeholder="select Design" onChange="getcoin();">
		<?php
			while($row0=mysqli_fetch_array($db3))
			{
		?>
				<option value='<?php echo $row0["Category_id"]; ?>'><?php echo $row0["Country"];?></option>
	<?php
			}
		?></select>
						</form>
										
												<?php
												
														$id=$_POST["coid"];
														$sql="select *from coin_detail_table p,category_table c where p.Category_id=c.Category_id and p.Category_id='$id'";
													
														$result=mysqli_query($con,$sql);
														$run=mysqli_num_rows($result);
														echo "total number of customers is".$run;				
												
												?>
												<div id="productdiv2">
												<table class="table">
														<thead>
																<tr>
																
																<th>Coin_id</th>
																<th>Coin_name</th>
																<th>Coin_price</th>
																
																		
																</tr>
														</thead>
												<?php
														while($row=mysqli_fetch_array($result))
															{
												
												?>
														<tbody>
																	<tr>
																		<td><?php echo $row['Coin_id']; ?></td>
																		<td><?php echo $row['Coin_name']; ?></td>
																		<td><?php  echo $row['Coin_price'];?></td>
																		
																	</tr>
														</tbody>
												<?php
												
													}
												?>
												</table></div>
										
										</div>
                 <button type="button" class="btn btn-warning" data-toggle="collapse" data-target="#demo3">Orders</button>
					   					<div id="demo3" class="collapse">
										
												<?php
												
														$sql="select *from cart_detail";
														$result=mysqli_query($con,$sql);
														$run=mysqli_num_rows($result);
														echo "total number of customers is".$run;				
												
												?>
												<table class="table">
														<thead>
																<tr>
																<th>Cart_Id</th>
																<th>Cust_id</th>
																<th>Product_id</th>
																<th>product_size</th>
																
																		
																</tr>
														</thead>
												<?php
														while($row=mysqli_fetch_array($result))
															{
												
												?>
														<tbody>
																	<tr>
																		<td><?php echo $row['cart_Id']; ?></td>
																		<td><?php echo $row['Cust_id']; ?></td>
																		<td><?php  echo $row['Product_id'];?></td>
																		<td><?php  echo $row['product_qty'];?></td>
																	</tr>
														</tbody>
												<?php
												
													}
												?>
												</table>
										
										</div>

                     <!--   <a href="#" class="btn btn-primary">primary</a>
                        <a href="#" class="btn btn-danger">danger</a>
                        <a href="#" class="btn btn-success">success</a>
                        <a href="#" class="btn btn-info">info</a>
                        <a href="#" class="btn btn-warning">warning</a>-->
                        <br>
                        <br>
                        <h5>Progressbar Samples</h5>
                        <div class="progress progress-striped">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                <span class="sr-only">40% Complete (success)</span>
                            </div>
                        </div>
                        <div class="progress progress-striped active">
                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                <span class="sr-only">20% Complete</span>
                            </div>
                        </div>


                    </div>

                </div>
                <!-- /. ROW  -->
                  
    <div class="footer">
      
    
             <div class="row">
                <div class="col-lg-12" >
                    &copy;  2014 yourdomain.com | Design by: <a href="http://binarytheme.com" style="color:#fff;"  target="_blank">www.binarytheme.com</a>
                </div>
        </div>
        </div>
          

     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
