<?php
	error_reporting("");
	include 'include/db.php';
	extract($_POST);
if(isset($_REQUEST["submit"]))	
{
	
		$n=date("dmyhis").rand();
$fname=$n.$_FILES["r10"]["name"];
$tname=$_FILES["r10"]["tmp_name"];
$path="uploads/$fname";
	move_uploaded_file($tname,$path);
	$db=mysqli_query($con,"insert into coin_detail_table(Coin_name,Category_id,Emp_id,Description,Time_period,Grade,Rarity,Coin_price,Coin_image) values('$r1','$r2','$r4','$r5','$r6','$r7','$r8','$r9','$fname')");
	if (mysqli_affected_rows($con)==1) 
	{
		echo "<script>alert('Row inserted succesfully');
			window.location.href='coin_detail.php';</script>";
	}
	else
	{
		echo "<script>alert('Please enter unique value.');
			window.location.href='coin_detail.php';</script>";
	}
}
else{
	
	header("location:coin_detail.php");
	}

?>