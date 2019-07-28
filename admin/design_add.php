<?php
	error_reporting("");
	include 'include/db.php';
	extract($_POST);
if(isset($_REQUEST["submit"]))	
{
$n=date("dmyhis").rand();
$fname=$n.$_FILES["r6"]["name"];
$tname=$_FILES["r6"]["tmp_name"];
$path="uploads/$fname";
	move_uploaded_file($tname,$path);

	$db=mysqli_query($con,"insert into design_detail_table(Design_Name,Category_id,Description,Size,Design_cost,Image) values('$r1','$r2','$r3','$r4','$r5','$fname')");
	if (mysqli_affected_rows($con)==1) 
	{
		echo "<script>alert('Row inserted succesfully');
			window.location.href='design_detail.php';</script>";
	}
	else
	{
		echo "<script>alert('Please enter unique value.');
			window.location.href='design_detail.php';</script>";
	}
}
else{
	
	header("location:design_detail.php");
	}

?>