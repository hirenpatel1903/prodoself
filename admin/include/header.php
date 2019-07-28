<?php session_start();
error_reporting("");
if(! isset($_SESSION['admin']['status']))
{
	header("location:login.php");
}

?>


         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img src="assets/img/logo.png" />
						<?php echo $_SESSION['admin']['r1']; ?>

                    </a>
                    
                </div>
              
                <span class="logout-spn" >
				
                  <a href="logout.php" style="color:#fff;">LOGOUT</a>  

                </span>
            </div>
        </div>