<?php
	error_reporting("");
	include 'include/db.php';
	extract($_POST);
if(isset($_REQUEST["submit"]))	
{
	$db=mysqli_query($con,"insert into design_category_table(Category_name) values('$r1')");
	if (mysqli_affected_rows($con)==1) 
	{
		echo "<script>alert('Row inserted succesfully');
			window.location.href='d_category_detail.php';</script>";
	}
	else
	{
		echo "<script>alert('Please enter unique value.');
			window.location.href='d_category_detail.php';</script>";
	}
}
else{
	
	header("location:d_category_detail.php");
	}

?>