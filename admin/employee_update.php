<?php
	error_reporting("");
	include 'include/db.php';
if(isset($_REQUEST["submit"]))	
{		
$id=$_POST["r0"];
$sna=$_POST["r1"];
$d=$_POST["r2"];
$pu=$_POST["r3"];
$sc=$_POST["r4"];


$db=mysqli_query($con,"update employee_detail_table set Emp_name='$sna',Designation='$d',Date_of_joining='$pu',Emp_salary='$sc' where Emp_id='$id'");
if (mysqli_affected_rows($con)==1) 
	{
		echo "<script>alert('Row updated succesfully.');
			window.location.href='employee_detail.php';</script>";
	}
	else
	{
		echo "<script>alert('Please enter unique value.');
			window.location.href='employee_detail.php';</script>";
	}
}
else
{
	header("location:employee_detail.php");
}

?>