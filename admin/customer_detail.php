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
				   <h3 style="color:#006400">All Customers:</h3>
				   </center>   
                    </div>
                </div>
<br>				   
<?php
$start=0; // limit=1,2;
$limit=2; // limit=2,2;
$t=mysqli_query($con,"select * from registration_table");
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

$db=mysqli_query($con,"select *from registration_table order by Cust_id limit $start,$limit");
$rc=mysqli_num_rows($db);
  ?>				
 <div class="table-responsive" >				
<table border="1" align="center" class="table">
  <tr class="danger">
    <th>Cust_Id</th>
    <th>Firstname</th>
	<th>Lastname</th>
	<th>Password</th>
	<th>Address</th>
	<th>City</th>
	<th>State</th>
    <th>Pin-Code</th>
	<th>Country</th>
    <th>Date_Of_Birth</th>
	<th>Gender</th>
    <th>Email</th>
	<th>Phone_No</th>
	<th>Delete</th>
  </tr>
  <?php
  while($row=mysqli_fetch_array($db))
  {
  ?>
  <tr class="success">
    <td><?php echo $row["Cust_id"];?></td>
	<td><?php echo $row["Firstname"];?></td>
	<td><?php echo $row["Lastname"];?></td>
	<td><?php echo $row["Password"];?></td>
	<td><?php echo $row["Address"];?></td>
    <td><?php echo $row["City"];?></td>
	<td><?php echo $row["State"];?></td>
	<td><?php echo $row["Pincode"];?></td>
	<td><?php echo $row["Country"];?></td>
	<td><?php echo $row["Date_of_Birth"];?></td>	
	<td><?php echo $row["Gender"];?></td>
	<td><?php echo $row["E-mail"];?></td>
	<td><?php echo $row["Phone_no"];?></td>	
		<td align="center"><a href='customer_delete.php?x=<?php echo $row["Cust_id"];?>'><img src="include/delete.png" /></a></td>
  </tr>
  <?php
  }
   ?>
</table>
<br />
<center>
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
</center>

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
