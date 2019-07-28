<?php
	error_reporting("");
	include 'include/db.php';
if(isset($_REQUEST["submit"]))	
{		
extract($_POST);	
$id=$_POST["r0"];
$sna=$_POST["r1"];




$db=mysqli_query($con,"update pro_category_table set Category_name='$sna' where Category_id='$id'");
if (mysqli_affected_rows($con)==1) 
	{
		echo "<script>alert('Row updated succesfully.');
			window.location.href='p_category_detail.php';</script>";
	}
	else
	{
		echo "<script>alert('Please enter unique value.');
			window.location.href='p_category_detail.php';</script>";
	}
}
else
{
	header("location:p_category_detail.php");
}

?>