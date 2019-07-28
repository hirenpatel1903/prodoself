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
				   <h3 style="color:#8B0000">Update Design Deatails</h3>
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
	$db=mysqli_query($con,"select * from design_detail_table where Design_Id='$id'");
	$rc=mysqli_num_rows($db);
	$row=mysqli_fetch_array($db);
	$db1=mysqli_query($con,"select * from design_category_table");
?>					

            <form action="design_update.php" method="post" enctype="multipart/form-data" style="padding:10px;color:#31708f; font-size:20px;">
<strong ><table align="center">
	<tr>
		<td>Design Name &nbsp;&nbsp;</td>
		<input type="hidden" name="r0" value='<?php echo $row["Design_Id"];?>' />
		<td><input type="text" name="r1" class="form-control" required="" value='<?php echo $row["Design_Name"];?>' /></td>	
	</tr>
		<tr>
	<td>Category Name</td>
	   <td> <select name="r2" placeholder="select Design">
		<?php
			while($row2=mysqli_fetch_array($db1))
			{
				if($row["Category_id"]==$row2["Category_id"])
				{				
		?>
				<option selected value='<?php echo $row2["Category_id"];?>'><?php echo $row2["Category_name"];?></option>
			<?php
				}
				else
				{
			?>
				<option value='<?php echo $row2["Category_id"];?>'><?php echo $row2["Category_name"];?></option>
			<?php
				}
			}
		?>
		
	</select></td>
	</tr>
	<tr>
		<td>Description</td>
		<td><textarea name="r3" class="form-control" required="" style="resize: vertical;" > <?php echo $row["Description"];?> </textarea></td>
	</tr>
	<tr>
		<td>Size </td>
		<td><input type="number" min="0" name="r4" class="form-control" required="" value='<?php echo $row["Size"];?>' /></td>
	</tr>
	<tr>
		<td>Design cost </td>
		<td><input type="number" min="0" name="r5" class="form-control" required="" value='<?php echo $row["Design_cost"];?>' /></td>
	</tr>
	<tr>
			<td>Image</td>
			<td>
  
  <input type="file" name="r6"  class="form-control" required=""  />
  			</td>
	</tr>
  	<tr></strong>
		<td align="right" ><input type="submit" name="submit" value="Update" class="btn btn-success"  /></td>
		<td ><a href="design_detail.php"><input type="button" value="cancle" class="btn btn-warning" /></a></td>
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
				   <h3 style="color:#006400">All Employees:</h3>
				   </center>   
                    </div>
                </div>
<?php
$start=0; // limit=1,2;
$limit=5; // limit=2,2;
$t=mysqli_query($con,"select * from design_detail_table  ");
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

$db=mysqli_query($con,"select *from design_detail_table d,design_category_table c where d.Category_id=c.Category_id order by Design_Id limit $start,$limit");
$rc=mysqli_num_rows($db);
  ?>				
 <div class="table-responsive">				
<table border="1" align="center" class="table">
  <tr class="danger">
    <th>Design_Id</th>
    <th>Design_Name</th>
    <th>Category_Id</th>	
	<th>Description</th>	
    <th>Size</th>
    <th>Design_cost</th>
	<th>Cust_Id</th>
	<th>Image</th>
	<th>Edit</th>
	<th>Delete</th>
  </tr>
  <?php
  while($row=mysqli_fetch_array($db))
  {
  ?>
  <tr class="success">
    <td><?php echo $row["Design_Id"];?></td>
	<td><?php echo $row["Design_Name"];?></td>
	<td><?php echo $row["Category_id"];?></td>
	<td><?php echo $row["Description"];?></td>
	<td><?php echo $row["Size"];?></td>
	<td><?php echo $row["Design_cost"];?></td>
    <td><?php echo $row["Cust_id"];?></td>
	<td><img src="uploads/<?php echo $row['Image']; ?>" width="100" height="100"></td>	
		<td align="center"><a href='design_edit.php?x=<?php echo $row["Design_Id"];?>'><img src="include/edit.png" /></a></td>
		<td align="center"><a href='design_delete.php?x=<?php echo $row["Design_Id"];?>'><img src="include/delete.png" /></a></td>
  </tr>
  <?php
  }
   ?>
</table>
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
