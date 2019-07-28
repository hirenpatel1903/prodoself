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
$sc=$_POST["r4"];
$im=$_POST["r5"];
$cn=$_POST["r6"];
$dc=$_POST["r7"];
$tp=$_POST["r8"];
$n=date("dmyhis").rand();
$fname=$n.$_FILES["r9"]["name"];
$tname=$_FILES["r9"]["tmp_name"];
$path="uploads/$fname";
	move_uploaded_file($tname,$path);

$db=mysqli_query($con,"update coin_detail_table set Coin_name='$sna',Category_id='$d',Emp_id='$pu',Description='$sc',
Time_period='$im',Grade='$cn',Rarity='$dc',Coin_price='$tp',Coin_image='$fname' where Coin_id='$id'");

if (mysqli_affected_rows($con)==1) 
	{
		echo "<script>alert('Row updated succesfully.');
			window.location.href='coin_detail.php';</script>";
	}
	else
	{
		echo "<script>alert('Please enter unique value.');
			window.location.href='coin_detail.php';</script>";
	}
}
else
{
	header("location:coin_detail.php");
}


?>