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
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                   <center>  
				   <h3 style="color:#8B0000">Update Category Deatails</h3>
				   </center>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                    <div class="col-lg-12 ">
                      <div class="panel panel-primary">
					  <div class="panel-body" style="background:#FFE4E1">
<?php
	$id=$_GET["x"];
	$db=mysqli_query($con,"select * from category_table where Category_id='$id'");
	$rc=mysqli_num_rows($db);
	$row=mysqli_fetch_array($db);
?>					

            <form action="category_update.php" method="post" enctype="multipart/form-data" style="padding:10px;color:#31708f; font-size:20px;">
<strong ><table align="center">
	<tr>
		<td>Country &nbsp;&nbsp;</td>
		<input type="hidden" name="r0" value='<?php echo $row["Category_id"];?>' />
		<td><input type="text" name="r1" class="form-control" required="" value='<?php echo $row["Country"];?>' /></td>	
	</tr>
	<tr>
		<td>Currency</td>
		<td><input type="text" name="r2" class="form-control" required="" value='<?php echo $row["Currency"];?>' /></td>
	</tr>
	
  	<tr></strong>
		<td align="right" ><input type="submit" value="Update" name="submit" class="btn btn-success"  /></td>
		<td ><a href="category_detail.php"><input type="button" value="cancle" class="btn btn-warning" /></a></td>
	</tr>
</table>
                        </form>
						</div>
						</div>
                       
                    </div>
                    </div>
 <br><br>                 <!-- /. ROW  --> 
   <div class="row">
                    <div class="col-lg-12">
                   <center>  
				   <h3 style="color:#006400">All Categories:</h3>
				   </center>   
                    </div>
                </div>
<?php
$id=$_GET["x"];
$db=mysqli_query($con,"select *from category_table");
$rc=mysqli_num_rows($db);
  ?>				
 <div class="table-responsive">				
<table border="1" align="center" class="table">
  <tr class="danger">
    <th>Category_Id</th>
    <th>Country</th>
	<th>Currency</th>
    <th>Edit</th>
	<th>Delete</th>
  </tr>
  <?php
  while($row=mysqli_fetch_array($db))
  {
  ?>
  <tr class="success">
    <td><?php echo $row["Category_id"];?></td>
	<td><?php echo $row["Country"];?></td>
	<td><?php echo $row["Currency"];?></td>
		<td align="center"><a href='category_edit.php?x=<?php echo $row["Category_id"];?>'><img src="include/edit.png" /></a></td>
		<td align="center"><a href='category_delete.php?x=<?php echo $row["Category_id"];?>'><img src="include/delete.png" /></a></td>
  </tr>
  <?php
  }
   ?>
</table>
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
