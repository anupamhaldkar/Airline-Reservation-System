<?php
	session_start();
?>
<!DOCTYPE html>


<head>
	
<meta charset="utf-8">
	
<meta name="viewport" content="width=devidev-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	
<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Deactivate Aircraft</title>
	
	
<!-- [ FONT-AWESOME ICON ] -->
	
<link rel="stylesheet" type="text/css" href="library/font-awesome-4.3.0/css/font-awesome.min.css">

	
<!-- [ PLUGIN STYLESHEET ]-->
	
<link rel="shortcut icon" type="image/x-icon" href="images/icon.png">
	
<link rel="stylesheet" type="text/css" href="css/animate.css">
	
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
        
<link rel="stylesheet" type="text/css" href="css/owl.theme.css">
	
<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
	
<!-- [ Boot STYLESHEET ]-->
	
<link rel="stylesheet" type="text/css" href="library/bootstrap/css/bootstrap-theme.min.css">
	
<link rel="stylesheet" type="text/css" href="library/bootstrap/css/bootstrap.css">
       
<!-- [ DEFAULT STYLESHEET ] -->
	
<link rel="stylesheet" type="text/css" href="css/style.css">
        
<link rel="stylesheet" type="text/css" href="css/responsive.css">
	
<link rel="stylesheet" type="text/css" href="css/color/rose.css">
		<style>
			input {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 7px 30px;
				color:black;
			}
			input[type=submit] {
				background-color: #030337;
				color: white;
    			border-radius: 4px;
    			padding: 7px 45px;
    			margin: 0px 67px
			}
			.adi{width:100%;
			font-size:25px;
			color:purple;}
		</style>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	</head>
	<body>
<!-- [ LOADERs ]-->
	
<div class="preloader">
    
	<div class="loader theme_background_color">
			
	<span></span>
		  
		
	</div>
	</div>
	<!-- [ /PRELOADER ]-->
	
	<!-- [WRAPPER ]-->
	
	<div class="wrapper">
	  
	<!-- [NAV]-->    
	   
	<!-- Navigation-->
		
	<nav  class=" nim-menu navbar navbar-default navbar-fixed-top">
		  
	<div class="container">
	  
			
	<!-- Brand and toggle get grouped for better mobile display -->
			
	<div class="navbar-header">
			  
	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				
	<span class="sr-only">Toggle navigation</span>
				
	<span class="icon-bar"></span>
				
	<span class="icon-bar"></span>
				
	<span class="icon-bar"></span>
			  
	</button>
	 <a href=""><img class="logo" src="images/shutterstock_22.jpg"/> </a>           
	<a class="navbar-brand" href="index.php">Online<span class="themecolor"> T</span>ickets</a>
			
	</div>
	
			
	<!-- Collect the nav links, forms, and other content for toggling -->
			
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			  
	<ul class="nav navbar-nav navbar-right">
				
	<li><a href="admin_homepage.php" class="page-scroll"><h3><i class="fa fa-home" aria-hidden="true"></i>Home</h3></a></li>
												   
	
	<li> <a href="admin_homepage.php" class="page-scroll" ><h3><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard<h3></a> </li>
												   
												   <li>							 
	<!--<li><a href="#three" class="page-scroll"><h3><i class="fa fa-plane" aria-hidden="true"></i> Services</h3></a></li>
	 -->           
	
	 <li><a href="logout_handler.php"><h3><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</h3></a></li>
	
			  
	</ul>
			
	</div>
	<!-- /.navbar-collapse -->
		  
	</div><!-- /.container-fluid -->
		
	</nav>
	
	
	   
	<!-- [/NAV]--> 
		
		<section class="main-heading" id="home">
		   
	<div class="overlay">
			   
	<div class="container">
				   
	<div class="row">
					   
	<div class="main-heading-content col-md-12 col-sm-12 text-center">
		<form action="deactivate_jet_details_form_handler.php" method="post">
			<h2 style="color:crimson">ENTER THE AIRCRAFT TO BE DEACTIVATED</h2><br><br>
			<div>
			<?php
				if(isset($_GET['msg']) && $_GET['msg']=='success')
				{
					echo "<strong style='color: green'>The Aircraft has been successfully deactivated.</strong>
						<br>
						<br>";
				}
				else if(isset($_GET['msg']) && $_GET['msg']=='failed')
				{
					echo "<strong style='color:red'>*Invalid Jet ID entered, please enter again.</strong>
						<br>
						<br>";
				}
			?>
			<table cellpadding="5" style="padding-left: 20px;" class="adi">
				<tr>
					<td class="fix_table text-info">Enter a valid Jet ID<br><br></td>
				</tr>
				<tr>
					<td class="fix_table"><input type="text" name="jet_id" required></td>
				</tr>
			</table>
			<br>
			<input type="submit" value="Deactivate" name="Deactivate">
			</div>
		</form>
		</div>
      
	  </div>
		 
	   </div>
		
	  </div>
	  
	  </section>
	  
	  <!--sub-form end--> 
	  
	  
	   
	   
	  <!-- [/CONTACT]-->
	   
	   
	   
	  <!-- [FOOTER]-->
	   
	  
	  <footer class="site-footer section-spacing text-center " id="eight">
		  
		
	  <div class="container">
		  
	  <div class="row">
			
	  <div class="col-md-4">
			  
	  <p class="footer-links"><a href="#">Terms of Use</a> <a href="#">Privacy Policy</a></p>
			
	  </div>
			
	  <div class="col-md-4"> <small>&copy; 2019, All right reserved</small></div>
			
	  <div class="col-md-4"> 
			  
	  <!--social-->
			  
			  
	  <ul class="social">
				
	  <li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter "></i></a></li>
				
	  <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
				
	  <li><a href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
			  
	  </ul>
			  
			  
	  <!--social end--> 
			  
			
	  </div>
		  
	  </div>
		
	  </div>
	  
	  </footer>
	  
	   
	   
	   
	  <!-- [/FOOTER]-->
	   
	   
	   
	  
	  </div>
	   
	  
	  <!-- [ /WRAPPER ]-->
	  
		  
	  <!-- [ DEFAULT SCRIPT ] -->
		  
	  <script src="library/modernizr.custom.97074.js"></script>
		  
	  <script src="library/jquery-1.11.3.min.js"></script>
			  
	  <script src="library/bootstrap/js/bootstrap.js"></script>
		  
	  <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>	
		  
	  <!-- [ PLUGIN SCRIPT ] -->
			  
	  <script src="library/vegas/vegas.min.js"></script>
		  
	  <script src="js/plugins.js"></script>
			  
	  <!-- [ TYPING SCRIPT ] -->
			   
	  <script src="js/typed.js"></script>
			   
	  <!-- [ COUNT SCRIPT ] -->
			   
	  <script src="js/fappear.js"></script>
			 
	  <script src="js/jquery.countTo.js"></script>
		  
	  <!-- [ SLIDER SCRIPT ] -->  
			  
	  <script src="js/owl.carousel.js"></script>
			   
	  <script src="js/jquery.magnific-popup.min.js" type="text/javascript"></script>
			  
	  <script type="text/javascript" src="js/SmoothScroll.js"></script>
			  
			  
	  <!-- [ COMMON SCRIPT ] -->
		  <script src="js/common.js"></script>
		
		  </body>
	  </html>