<?php
	error_reporting("");
	include 'include/db.php';
	$db0=mysqli_query($con,"select * from coin_detail_table");
	$db1=mysqli_query($con,"select * from registration_table");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ProdoSelf</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

<style type="text/css">
td{
	padding:10px;
}
</style>
</head>
<body>
     
       <div id="wrapper">    
        <!-- header--->  
		<?php
				include_once 'include/header.php';
			?>
		<!-- /header--->
    
        <!-- /. NAV TOP  -->
       <!-- sidebar -->
	 	<?php
				include_once 'include/slidebar.php';
			?>		

	   <!-- / sidebar -->
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">

 <br><br> 
               <!-- /. ROW  --> 
   <div class="row">
                    <div class="col-lg-12">
                   <center>  
				   <h3 style="color:#006400">All Coin Orders:</h3>
				   </center>   
                    </div>
                </div>
				   
<?php
//$db=mysql_query("select *from pro_order_detail_table p,registration_detail_table s,product_detail_table r,design_detail_table q where p.Cust_id=s.Cust_id and p.Product_id=r.Product_id and p.Design_Id=q.Design_Id");
$db=mysqli_query($con,"select *from c_order_detail_table order by C_Order_id ");
$rc=mysqli_num_rows($db);
  ?>				
 <div class="table-responsive">				
<table border="1" align="center" class="table">
  <tr class="danger">
    <th>C_Order_Id</th>
    <th>Coin_Id</th>
	<th>Customer_Id</th>
    <th>Coin_Price</th>
	<th>Order_Date</th>
	<th>Quantity</th>
	<th>Tax</th>
	<th>Total_Bill</th>
	<th>Delete</th>
  </tr>
  <?php
  while($row=mysqli_fetch_array($db))
  {
  ?>
  <tr class="success">
    <td><?php echo $row["C_Order_id"];?></td>
	<td><?php echo $row["Coin_id"];?></td>
	<td><?php echo $row["Cust_id"];?></td>
	<td><?php echo $row["Coin_price"];?></td>
	<td><?php echo $row["Order_date"];?></td>
	<td><?php echo $row["Quantity"];?></td>
	<td><?php echo $row["Tax"];?></td>
	<td><?php echo $row["Total_bill"];?></td>
	
	
		<td align="center"><a href='c_order_delete.php?x=<?php echo $row["C_Order_id"];?>'><img src="include/delete.png" /></a></td>
  </tr>
  <?php
  }
   ?>
</table>

</div>
</div>
</div>         
		 <!-- /. ROW  --> 
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
		<!-- footer-->
		<?php
				include_once 'include/footer.php';
			?>			

  <!-- /footer-->
          

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
