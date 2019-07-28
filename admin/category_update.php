<?php
	error_reporting("");
	include 'include/db.php';
if(isset($_REQUEST["submit"]))	
{		
extract($_POST);	
$id=$_POST["r0"];
$sna=$_POST["r1"];
$d=$_POST["r2"];



$db=mysqli_query($con,"update category_table set Country='$sna',Currency='$d' where Category_id='$id'");
if (mysqli_affected_rows($con)==1) 
	{
		echo "<script>alert('Row updated succesfully.');
			window.location.href='category_detail.php';</script>";
	}
	else
	{
		echo "<script>alert('Please enter unique value.');
			window.location.href='category_detail.php';</script>";
	}
}
else
{
	header("location:category_detail.php");
}


?>