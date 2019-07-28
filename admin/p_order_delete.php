<?php
	error_reporting("");
include 'include/db.php';
if(! empty($_REQUEST))
{
$id=$_GET["x"];

$db=mysqli_query($con,"delete * from cart_detail where cart_id='$id'");
	if (mysqli_affected_rows($con)==1) 
	{
		echo "<script>alert('Row deleted succesfully.');
			window.location.href='p_order_detail.php';</script>";
	}
	else
	{
		echo "<script>alert('can`t be delete!! selected row is related in other table.');
			window.location.href='p_order_detail.php';</script>";
	}
}
else
{
	header("location:p_order_detail.php");
}
	
?>