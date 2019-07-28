<?php
	error_reporting("");
	include 'include/db.php';
	extract($_POST);
if(isset($_REQUEST["submit"]))	
{
	$db=mysqli_query($con,"insert into category_table(Country,Currency) values('$r1','$r2')");
	if (mysqli_affected_rows($con)==1) 
	{
		echo "<script>alert('Row inserted succesfully');
			window.location.href='category_detail.php';</script>";
	}
	else
	{
		echo "<script>alert('Please enter unique value.');
			window.location.href='category_detail.php';</script>";
	}
}
else{
	
	header("location:category_detail.php");
	}

?>