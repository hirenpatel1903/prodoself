<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Shopper an E-Commerce online Shopping Category Flat Bootstarp responsive Website Template| Cart :: w3layouts</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/hover.css" rel="stylesheet" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shopper Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<!---- tabs---->
<link type="text/css" rel="stylesheet" href="css/easy-responsive-tabs.css" />
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion           
            width: 'auto', //auto or any width like 600px
            fit: true,   // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#tabInfo');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });

        $('#verticalTab').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true
        });
    });
</script>
<!---- tabs---->

</head>
<body>
<!---->
<?php include("header.php");?>
<!--CONTACT-->
<div class="contact">
	 <div class="container">		 
		 <div class="contact-head">		
				<h2>Dashboard</h2>			 
				<p>Coin Details</p>
		 </div>
		 <div class="col-md-8 contact-left">
			 
             
             
             
             
             
             
             <table style="width:100%">
  <tr>
    <td>User Name</td>
    <td>Coin Name</td>		
    <td>Price</td>
	<td>Category</td>
    <td>Description</td>
    <td>Image</td>
  </tr>
  
       <?php
		$id = $_SESSION['uid'];
		$sql="SELECT * FROM coin_detail_table WHERE Cust_id='$id'";
		$result=mysqli_query($conn,$sql);
		
		while($row=mysqli_fetch_array($result))
		{

?>
  
  <tr>
    <td><?php echo $_SESSION['uname'].$_SESSION['uname2'];?></td> 
    <td><?php echo $row['Coin_name']; ?></td>
    <td><?php echo $row['Coin_price']; ?></td>
	<td><?php echo $row['Category_id']; ?></td>		
    <td><?php echo $row['Description']?></td>
    <td><img src="coinimage/<?php echo $row['Coin_image']; ?>" height="100px" width="100px" alt=""></br></br></td>
  </tr>
  
 
 
 <?php }?>
</table>
             
             
             
             
             
             
          
             
             
             
             
		 </div>
		 
		 <div class="clearfix"></div>		 
			<!---->
			
			<!---->
	 </div>	 
</div>
<!--CONTACT Ends-->
<!---->
<?php include("footer.php");?>
<!---->		
</body>
</html>