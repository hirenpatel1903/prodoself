<?php
	error_reporting("");
	include 'include/db.php';
if(isset($_REQUEST["submit"]))	
{		
extract($_POST);	
$id=$_POST["r0"];
$sna=$_POST["r1"];
$pc=$_POST["r2"];
$pu=$_POST["r3"];
$sc=$_POST["r4"];

$n=date("dmyhis").rand();
$fname=$n.$_FILES["r5"]["name"];
$tname=$_FILES["r5"]["tmp_name"];
$path="uploads/$fname";
	move_uploaded_file($tname,$path);

$db=mysqli_query($con,"update product_detail_table set Product_name='$sna',Category_id='$pc',P_Description='$pu',Product_price='$sc',Image='$fname' where Product_id='$id'");
if (mysqli_affected_rows($con)==1) 
	{
		echo "<script>alert('Row updated succesfully.');
			window.location.href='product_detail.php';</script>";
	}
	else
	{
		echo "<script>alert('Please enter unique value.');
			window.location.href='product_detail.php';</script>";
	}
}
else
{
	header("location:product_detail.php");
}

?>