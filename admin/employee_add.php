<?php
	error_reporting("");
	include 'include/db.php';
	extract($_POST);
if(isset($_REQUEST["submit"]))	
{

	$db=mysqli_query($con,"insert into employee_detail_table(Emp_name,Designation,Date_of_joining,Emp_salary) values('$r1','$r2','$r3','$r4')");
	if (mysqli_affected_rows($con)==1) 
	{
		echo "<script>alert('Row inserted succesfully');
			window.location.href='employee_detail.php';</script>";
	}
	else
	{
		echo "<script>alert('Please enter unique value.');
			window.location.href='employee_detail.php';</script>";
	}
}
else{
	
	header("location:employee_detail.php");
	}
	
?>