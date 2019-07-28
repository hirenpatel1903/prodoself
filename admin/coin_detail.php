<?php
	error_reporting("");
	include 'include/db.php';

	$db1=mysqli_query($con,"select * from category_table");
	$db2=mysqli_query($con,"select * from employee_detail_table");

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
				   <h3 style="color:#00008B">Insert Coin Details</h3>
				   </center>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                    <div class="col-lg-12 ">
                      <div class="panel panel-primary">
					  <div class="panel-body" style="background:#FFE4E1;">
						
<form action="coin_add.php" method="post" enctype="multipart/form-data" style="padding: 10px;color:#31708f; font-size:20px;">
		<strong ><table align="center">
		
	<tr>
		<td>Coin Name: &nbsp;&nbsp;</td>
		<td><input type="text" name="r1" required="" class="form-control" /></td>	
	</tr>
	
	<tr>
		<td>Country:</td>
		<td><select name="r2" placeholder="select country" class="form-control" >
		<?php
			while($row0=mysqli_fetch_array($db1))
			{
		?>
				<option value='<?php echo $row0["Category_id"]; ?>'><?php echo $row0["Country"];?></option>
			<?php
			}
		?></select></td>
	</tr>
	
	
		<td>Employee Name: </td>
		<td><select name="r4" placeholder="select name" class="form-control" >
		<?php
			while($row2=mysqli_fetch_array($db2))
			{
		?>
				<option value='<?php echo $row2["Emp_id"]; ?>'><?php echo $row2["Emp_name"];?></option>
			<?php
			}
		?></select>
		</td>
	</tr>
	<tr>
		<td>Description:</td>
		<td><textarea name="r5" required=""  class="form-control" style="resize: vertical;"></textarea></td>
	</tr>
	<tr>
		<td>Year: </td>
		<td><input type="number" min="1" max="2020" name="r6" required="" class="form-control" /></td>
	</tr>
	<tr>
		<td>Grade: </td>
		<td><select name="r7" placeholder="grade" class="form-control" >
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
		<td>Rarity: </td>
		<td><input type="number"  name="r8" required="" class="form-control" placeholder="1.0" step="0.1" min="1.0" max="10.1"/></td>
	</tr>
	<tr>
		<td>Coin Price: </td>
		<td><input type="number" step="0.01" min="0" name="r9" required="" class="form-control"/></td>
	</tr>
		<tr>
				<td>Coin Image:</td>
				<td>
  	<input type="file" name="r10" class="form-control" required="" />
  			</td>
	</tr>
  	<tr>
	</strong>
		<td colspan="2" align="center"><input type="submit" name="submit" value="Insert" class="btn btn-primary" /></td>
	</tr>
		</table>
</form>
						
						</div>
						</div>
                       
                    </div>
                    </div>
 <br><br> 
               <!-- /. ROW  --> 
   <div class="row">
                    <div class="col-lg-12">
                   <center>  
				   <h3 style="color:#006400">All Coins:</h3>
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
