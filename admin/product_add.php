<?php
	error_reporting("");
	include 'include/db.php';
	extract($_POST);
if(isset($_REQUEST["submit"]))	
{

$n=date("dmyhis").rand();
$fname=$n.$_FILES["r5"]["name"];
$tname=$_FILES["r5"]["tmp_name"];
$path="uploads/$fname";
	move_uploaded_file($tname,$path);

	$db=mysqli_query($con,"insert into product_detail_table(Product_name,Category_id,P_Description,Product_price,Image)
	values('$r1','$r2','$r3','$r4','$fname')");
if (mysqli_affected_rows($con)==1) 
	{
		echo "<script>alert('Row inserted succesfully');
			window.location.href='product_detail.php';</script>";
	}
	else
	{
		echo "<script>alert('Please enter unique value.');
			window.location.href='product_detail.php';</script>";
	}
}
else{
	
	header("location:product_detail.php");
	}
?>