<?php
	error_reporting("");
	include 'include/db.php';
if(isset($_REQUEST["submit"]))	
{		
extract($_POST);	
$id=$_POST["r0"];
$sna=$_POST["r1"];
$d=$_POST["r2"];
$pu=$_POST["r3"];
$g=$_POST["r4"];
$k=$_POST["r5"];

$n=date("dmyhis").rand();
$fname=$n.$_FILES["r6"]["name"];
$tname=$_FILES["r6"]["tmp_name"];
$path="uploads/$fname";
	move_uploaded_file($tname,$path);


$db=mysqli_query($con,"update design_detail_table set Design_Name='$sna',Category_id='$d',Description='$pu',Size='$g',Design_cost='$k',Image='$fname' where Design_Id='$id'");
if (mysqli_affected_rows($con)==1) 
	{
		echo "<script>alert('Row updated succesfully.');
			window.location.href='design_detail.php';</script>";
	}
	else
	{
		echo "<script>alert('Please enter unique value.');
			window.location.href='design_detail.php';</script>";
	}
}
else
{
	header("location:design_detail.php");
}


?>