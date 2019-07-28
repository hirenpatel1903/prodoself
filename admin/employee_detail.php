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
				   <h3 style="color:#00008B">Insert Employee Details</h3>
				   </center>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                    <div class="col-lg-12 ">
                      <div class="panel panel-primary">
					  <div class="panel-body" style="background:#FFE4E1;">
						
<form action="employee_add.php" method="post" enctype="multipart/form-data" style="padding: 10px;color:#31708f; font-size:20px;">
		<strong ><table align="center">
		
	<tr>
		<td>Employee Name: &nbsp;&nbsp;</td>
		<td><input type="text" name="r1" required="" class="form-control" /></td>	
	</tr>
	
	<tr>
		<td>Designation:</td>
		<td><input type="text" name="r2" required="" class="form-control" /></td>
	</tr>
	
	<tr>
		<td>Date of joining: </td>
		<td><input type="date" name="r3" required="" class="form-control" /></td>
	</tr>
	
	<tr>
			<td>Salary:</td>
			<td>
  <input type="number" name="r4" min="0" class="form-control" required="" />
  			</td>
	</tr>
  	<tr></strong>
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
				   <h3 style="color:#006400">All Employees:</h3>
				   </center>   
                    </div>
                </div>
				   
<?php
$db=mysqli_query($con,"select *from employee_detail_table order by Emp_id");
$rc=mysqli_num_rows($db);
  ?>				
 <div class="table-responsive">				
<table border="1" align="center" class="table">
  <tr class="danger">
    <th>Emp_Id</th>
    <th>Emp_Name</th>
	<th>Designation</th>
    <th>Date_of_joining</th>
	<th>Emp_Salary</th>
	<th>Edit</th>
	<th>Delete</th>
  </tr>
  <?php
  while($row=mysqli_fetch_array($db))
  {
  ?>
  <tr class="success">
    <td><?php echo $row["Emp_id"];?></td>
	<td><?php echo $row["Emp_name"];?></td>
	<td><?php echo $row["Designation"];?></td>
	<td><?php echo $row["Date_of_joining"];?></td>
	<td><?php echo $row["Emp_salary"];?></td>	
		<td align="center"><a href='employee_edit.php?x=<?php echo $row["Emp_id"];?>'><img src="include/edit.png" /></a></td>
		<td align="center"><a href='employee_delete.php?x=<?php echo $row["Emp_id"];?>'><img src="include/delete.png" /></a></td>
  </tr>
  <?php
  }
   ?>
</table>

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
