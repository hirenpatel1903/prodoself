<?php 
	error_reporting("");
	session_start();
	
	if(! empty($_POST))
	{
		extract($_POST);
		include 'include/connection.php';
		$msg='';
		$q="select * from admin_table 
		where Admin_name='".mysql_real_escape_string($r1)."' 
		and Password='".mysql_real_escape_string($r2)."'";
		$res=mysql_query($q,$link);
		$row=mysql_fetch_assoc($res);
		if(! empty($row))
		{
			$_SESSION['admin']['r1']=$row['Admin_name'];
			$_SESSION['admin']['status']=true;
			
			header("location:index.php");
		}
		else
		{
			$msg= "Please Enter Proper Name OR Password";
			header("location:login.php?msg=$msg");
		}
	}
	else
	{
		header("location:login.php");
	}
?>