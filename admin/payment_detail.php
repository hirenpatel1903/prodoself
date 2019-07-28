<?php
	error_reporting("");
	include 'include/db.php';

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
              
                 <!-- /. ROW  -->
                  <hr />

 <br><br> 
               <!-- /. ROW  --> 
   <div class="row">
                    <div class="col-lg-12">
                   <center>  
				   <h3 style="color:#006400">All Payment Details:</h3>
				   </center>   
                    </div>
                </div>
<br>				   
<?php
$start=0; // limit=1,2;
$limit=2; // limit=2,2;
$t=mysqli_query($con,"select * from payment_detail_table");
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

$db=mysqli_query($con,"select *from payment_detail_table order by Payment_id limit $start,$limit");
$rc=mysqli_num_rows($db);
  ?>				
 <div class="table-responsive" >				
<table border="1" align="center" class="table">
  <tr class="danger">
    <th>Payment Id</th>
    <th>P Order Id</th>
	<th>C Order Id</th>
	<th>Cust Id</th>
	<th>Payment Date</th>
	<th>Cust Name</th>	
    <th>Payment Status</th>
	<th>Total Bill</th>
	<th>Delete</th>
  </tr>
  <?php
  while($row=mysqli_fetch_array($db))
  {
  ?>
  <tr class="success">
    <td><?php echo $row["Payment_id"];?></td>
	<td><?php echo $row["Order_id"];?></td>
	<td><?php echo $row["C_Order_id"];?></td>
	<td><?php echo $row["Cust_id"];?></td>
    <td><?php echo $row["Payment_date"];?></td>
	<td><?php echo $row["Cust_name"];?></td>
	<td><?php echo $row["Payment_status"];?></td>
	<td><?php echo $row["Total_bill"];?></td>
		<td align="center"><a href='payment_delete.php?x=<?php echo $row["Payment_id"];?>'><img src="include/delete.png" /></a></td>
  </tr>
  <?php
  }
   ?>
</table>
<br /><center>
  <ul class="pagination">
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
 </ul>


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
