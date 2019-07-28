<?php
	//include('header.php');
	include('config.php');
	
	if(isset($_POST['submit']))
	{
		$coinname = $_POST['coinname'];
		$price = $_POST['price'];
		//$cat= $_POST['cat'];
		$description = $_POST['description'];
		$uid=$_SESSION['uid'];	
			
		
	
	    $v1=rand(1111,9999);
		$v2=rand(1111,9999);
		$v3=$v1.$v2;
		$v3=md5($v3);
		$fnm = $_FILES['image']['name'];
		
		
		$dst="coinimage/".$v3.$fnm;
		$dst1="coinimage/".$v3.$fnm;
		move_uploaded_file($_FILES['image']['tmp_name'],$dst);	
			
		$image=$v3.$fnm;	
			
			
		  $sql = "INSERT INTO `coin_detail_table`(`Cust_id`, `Coin_name` ,`Description` ,`Coin_price`,`Coin_image`) VALUES ('$uid','$coinname','$description','$price','$image')"; 
			
			
			$result = mysqli_query($conn,$sql);
			
			
	}
?>
				
                
                <script>
				alert("inserted succesfully");
				window.open('dashboard.php','_self');
				</script>