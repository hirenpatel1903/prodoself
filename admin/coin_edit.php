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
				   <h3 style="color:#8B0000">Update Product Deatails</h3>
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
	$db=mysqli_query($con,"select * from coin_detail_table where Coin_id='$id'");
	$rc=mysqli_num_rows($db);
	$row=mysqli_fetch_array($db);
	
	$db1=mysqli_query($con,"select *from category_table");
	$db2=mysqli_query($con,"select *from employee_detail_table");
?>					

            <form action="coin_update.php" method="post" enctype="multipart/form-data" style="padding:10px;color:#31708f; font-size:20px;">
<strong ><table align="center">
	<tr>
		<td>Coin Name &nbsp;&nbsp;</td>
		<input type="hidden" name="r0" value='<?php echo $row["Coin_id"];?>' />
		<td><input type="text" name="r1" class="form-control" required="" value='<?php echo $row["Coin_name"];?>' /></td>	
	</tr>
	<tr>
		<td>Country</td>
		 <td> <select name="r2" placeholder="select Country" class="form-control">
		<?php
			while($row1=mysqli_fetch_array($db1))
			{
				if($row["Category_id"]==$row1["Category_id"])
				{				
		?>
				<option selected value='<?php echo $row1["Category_id"];?>'><?php echo $row1["Country"];?></option>
			<?php
				}
				else
				{
			?>
				<option value='<?php echo $row1["Category_id"];?>'><?php echo $row1["Country"];?></option>
			<?php
				}
			}
		?></select>
		</td>
	</tr>
	
	<tr>
		<td>Employee Name</td>
		 <td> <select name="r3" placeholder="select Employee" class="form-control">
		<?php
			while($row3=mysqli_fetch_array($db2))
			{
				if($row["Emp_id"]==$row3["Emp_id"])
				{				
		?>
				<option selected value='<?php echo $row3["Emp_id"];?>'><?php echo $row3["Emp_name"];?></option>
			<?php
				}
				else
				{
			?>
				<option value='<?php echo $row3["Emp_id"];?>'><?php echo $row3["Emp_name"];?></option>
			<?php
				}
			}
		?></select>
		</td>
	</tr>
	<tr>
		<td>Description</td>
		<td><textarea name="r4" required=""  class="form-control" style="resize: vertical;"><?php echo $row["Description"];?></textarea></td>
	</tr>
<tr>
		<td>Year </td>
		<td><input type="text" id="datepicker" name="r5" required="" class="form-control" value="<?php echo $row["Time_period"];?>" /></td>
	</tr>
	<tr>
		<td>Grade </td>
		<td><select name="r6" placeholder="grade" class="form-control" value="<?php echo $row["Grade"];?>">
		<option value="G">G</option>
		<option value="VG">VG</option>
		<option value="F">F</option>
		<option value="VF">VF</option>
		<option value="EF/XF">EF/XF</option>
		<option value="UNC">UNC</option>
		<option value="UNC(L)">UNC(L)</option>
		<option value="FDC">FDC</option>
		</select></td>
	</tr>
	<tr>
		<td>Rarity </td>
		<td><input type="number"  name="r7" required="" class="form-control" value="<?php echo $row["Rarity"];?>" step="0.1" min="1.0" max="10.1"/></td>
	</tr>
<tr>
		<td>Coin Price </td>
		<td><input type="number"  min="0" name="r8" required="" class="form-control" value="<?php echo $row["Coin_price"];?>" step="0.01" /></td>
	</tr>
	<tr>
			<td>Image</td>
			<td>
  
  <input type="file" name="r9"  class="form-control"  />
  			</td>
	</tr>
  	<tr></strong>
		<td align="right" ><input type="submit" name="submit" value="Update" class="btn btn-success"  /></td>
		<td ><a href="coin_detail.php"><input type="button" value="cancle" class="btn btn-warning" /></a></td>
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
$t=mysqli_query($con,"select * from coin_detail_table");
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

$db=mysqli_query($con,"select *from coin_detail_table c, employee_detail_table e,category_table d  where c.Emp_id=e.Emp_id and c.Category_id=d.Category_id limit $start,$limit");
$rc=mysqli_num_rows($db);
  ?>				
 <div class="table-responsive">				
<table border="1" align="center" class="table">
  <tr class="danger">
    <th>Coin_Id</th>
    <th>Coin_Name</th>
	<th>Category_Id</th>
	<th>Emp_Id</th>
	<th>Description</th>
	<th>Time_Period</th>
	<th>Grade</th>
    <th>Rarity</th>
	<th>Coin_Price</th>
	<th>Cust_Id</th>
	<th>Coin_Image</th>
	<th>Edit</th>
	<th>Delete</th>
  </tr>
  <?php
  while($row=mysqli_fetch_array($db))
  {
  ?>
  <tr class="success">
    <td><?php echo $row["Coin_id"];?></td>
	<td><?php echo $row["Coin_name"];?></td>
	<td><?php echo $row["Category_id"];?></td>
	<td><?php echo $row["Emp_id"];?></td>
    <td><?php echo $row["Description"];?></td>
	<td><?php echo $row["Time_period"];?></td>
	<td><?php echo $row["Grade"];?></td>
	<td><?php echo $row["Rarity"];?></td>
	<td><?php echo $row["Coin_price"];?></td>
	<td><?php echo $row["Cust_id"];?></td>
	<td><img src="uploads/<?php echo $row['Coin_image']; ?>" width="100" height="100"></td>		
		<td align="center"><a href='coin_edit.php?x=<?php echo $row["Coin_id"];?>'><img src="include/edit.png" /></a></td>
		<td align="center"><a href='coin_delete.php?x=<?php echo $row["Coin_id"];?>'><img src="include/delete.png" /></a></td>
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
