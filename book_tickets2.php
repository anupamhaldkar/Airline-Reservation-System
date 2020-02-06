<?php
	session_start();
?>
<!DOCTYPE html>


<head>
	
<meta charset="utf-8">
	
<meta name="viewport" content="width=devidev-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	
<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Enter Travel & ticket Details</title>
	
	
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
    			padding: 7px 10px;
			}
			input[type=number] {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 7px 0px;
			}
			input[type=submit] {
				background-color: #030337;
				color: white;
    			border-radius: 4px;
    			padding: 7px 45px;
    			margin: 0px 500px
			}
			input[type=radio] {
    			margin-right: 30px;
			}
			select {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 6.5px 15px;
			}
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
				
	<li><a href="index.php" class="page-scroll" ><h3><i class="fa fa-home" aria-hidden="true"></i>Home</h3></a></li>
	
	<li> <a href="customer_homepage.php" class="page-scroll" ><h3><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard<h3></a> </li>
												   
	<li>
		<?php
		  if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Customer')
		  {
			echo "<a href=\"book_tickets.php\"><h3><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</h3></a>";
		  }
		  else if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Administrator')
		  {
			echo "<a href=\"admin_ticket_message.php\"><h3><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</h3></a>";
		  }
		  else
		  {
			echo "<a href=\"login_page.php\"><h3><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</h3></a>";
		  }
		?>
	  </li>
									 
	<!--<li><a href="#three" class="page-scroll"><h3><i class="fa fa-plane" aria-hidden="true"></i> Services</h3></a></li>
	 -->           
	<li><a href="#eight" class="page-scroll"><h3><i class="fa fa-phone" aria-hidden="true"></i> Contact</h3></a></li>
	
	
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
		<br><br>			   
	<div class="main-heading-content col-md-12 col-sm-12 text-left">
	<br><br>
	<br><br
	><br><br>
	<br><br>
	<br><br>
	<br><br>
	<br><br>
		<?php
			$no_of_pass=$_SESSION['no_of_pass'];
			$class=$_SESSION['class'];
			$count=$_SESSION['count'];
			$flight_no=$_POST['select_flight'];
			$_SESSION['flight_no']=$flight_no;
			//$pass_name=array();
			echo "<h2 class=\"text-primary\"><br>ADD PASSENGERS DETAILS :</h2><br>";
			echo "<form action=\"add_ticket_details_form_handler.php\" method=\"post\">";
			while($count<=$no_of_pass)
			{
					echo "<p class=\"text-dark\"><strong >PASSENGER ".$count."</strong></p>";
					echo "<table cellpadding=\"0\" cellspacing=\"6px\" style=\"color:cyan;\" style=\"background:brown\" >";
					echo "<tr><br>";
					echo "<td class=\"fix_table_short\"><b>Passenger's Name :</b></td>";
					echo "<td class=\"fix_table_short\">Passenger's Age</td>";
					echo "<td class=\"fix_table_short\">Gender</td>";
					echo "<td class=\"fix_table_short\">flight Meal</td>";
					echo "<td class=\"fix_table_short\">Passenger's Frequent Flier ID (if applicable)</td>";
					echo "</tr>";
					echo "<tr>";
					echo "<td class=\"fix_table_short\"><input type=\"text\" name=\"pass_name[]\" required></td>";
					echo "<td class=\"fix_table_short\"><input type=\"number\" name=\"pass_age[]\" required></td>";
					echo "<td class=\"fix_table_short\">";
					echo "<select name=\"pass_gender[]\">";
  					echo "<option value=\"male\">Male</option>";
  					echo "<option value=\"female\">Female</option>";
  					echo "<option value=\"other\">Other</option>";
  					echo "</select>";
  					echo "</td>";
  					echo "<td class=\"fix_table_short\">";
					echo "<select name=\"pass_meal[]\">";
  					echo "<option value=\"yes\">Yes</option>";
  					echo "<option value=\"no\">No</option>";
  					echo "</select>";
  					echo "</td>";
  					echo "<td class=\"fix_table_short\"><input type=\"text\" name=\"pass_ff_id[]\"></td>";
					echo "</tr>";
					echo "</table>";
					echo "<br><br><hr>";
					$count=$count+1;
				}
				echo "<br><h2 class=\"text-primary\">ENTER TRAVEL DETAILS :</h2>";
				echo "<table cellpadding=\"5\" style=\"color:cyan;\" style=\"background:brown\">";
				echo "<tr><br>";
				echo "<td class=\"fix_table_short\">Do you want access to our Premium Lounge ?</td>";
				echo "<td class=\"fix_table_short\"><span> </span> Do you want to opt for Priority Checkin?</td>";
				echo "<td class=\"fix_table_short\"> Do you want to purchase Travel Insurance?</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td class=\"fix_table\">";
				echo "Yes <input type='radio' name='lounge_access' value='yes' checked/> No <input type='radio' name='lounge_access' value='no'/>";
  				echo "</td>";
  				echo "<td class=\"fix_table\">";
				echo "Yes <input type='radio' name='priority_checkin' value='yes' checked/> No <input type='radio' name='priority_checkin' value='no'/>";
  				echo "</td>";
  				echo "<td class=\"fix_table\">";
				echo "Yes <input type='radio' name='insurance' value='yes' checked/> No <input type='radio' name='insurance' value='no'/>";
  				echo "</td>";
				echo "</tr>";
				echo "</table>";
				echo "<br><br>";
				echo "<input type=\"submit\" value=\"Submit Travel/Ticket Details\" name=\"Submit\">";
				echo "</form>";
		?>
		<!--Following data fields were empty!
			...
			ADD VIEW FLIGHT DETAILS AND VIEW JETS/ASSETS DETAILS for ADMIN
		-->

		</div>

</div>

</div>

</div>

</section>
<!-- [CONTACT]-->
 
<!--sub-form-->
<section class="sub-form text-center" id="eight">
  
<div class="container">
    <div class="col-md-12">
        
<h3 class="title">Subscribe to our <span class="themecolor"> News letter</span></h3>
            
<p class="lead">We’d love to stay in touch, We will send you deals , tour packages , offers and many.</p>
    
</div> 
    
<div class="row">
        
<div class="col-md-3 col-sm-3"></div>
      
<div class="col-md-6 center-block col-sm-6 ">
        
<form id="mc-form" action="alertb()" >
          
<div class="input-group">
            
<input type="email" class="form-control" placeholder="Email Address" required id="mc-email">
           
<span class="input-group-btn">
            
<button type="submit" class="btn btn-default" >SUBSCRIBE</a> <i class="fa fa-envelope"></i> </button>
            
</span> </div>
          
<label for="mc-email" id="mc-notification"></label>
       
 </form>
      
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