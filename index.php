<?php
	session_start();
?>
<!DOCTYPE html>


<head>
	
<meta charset="utf-8">
	
<meta name="viewport" content="width=devidev-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	
<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Online Ticket Reservation</title>
	
	
<!-- [ FONT-AWESOME ICON ] -->
	
<link rel="stylesheet" type="text/css" href="library/font-awesome-4.3.0/css/font-awesome.min.css">

	
<!-- [ PLUGIN STYLESHEET ] -->
	
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
.adddi {
  color:black;
  font-weight:bold;
  fonnt-size:20px;
}
.border2{
  background:black;
}
.border3{
  border:2px solid black;
  font-size:24px;
  background:white;
}

</style>
</head>
<body >

<!-- [ LOADERs ] -->
	
    <div class="preloader">
    
<div class="loader theme_background_color">
        
<span></span>
      
    
</div>
</div>
<!-- [ /PRELOADER ]-->

<!-- [WRAPPER ] -->

<div class="wrapper">
  
<!-- [NAV] -->    
   
<!-- Navigation -->
    
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
<a class="navbar-brand" href="index.php"><span class="themecolor">Air</span>lions<span class="themecolor"> T</span>icket</a>
        
</div>

        
<!-- Collect the nav links, forms, and other content for toggling -->
        
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          
<ul class="nav navbar-nav navbar-right">
            
<li><a href="index.php" class="page-scroll"><h3><i class="fa fa-home" aria-hidden="true"></i>Home</h3></a></li>
                                               
<li>
    <?php
      if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Customer')
      {
        echo "<h3><a href=\"book_tickets.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</h3></a>";
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
                                 
<li><a href="#three" class="page-scroll"><h3><i class="fa fa-plane" aria-hidden="true"></i> Services</h3></a></li>
            
<li><a href="#eight" class="page-scroll"><h3><i class="fa fa-phone" aria-hidden="true"></i> Contact</h3></a></li>

<li>
    <?php
      if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Customer')
      {
        echo "<a href=\"customer_homepage.php\"><h3><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</h3></a>";
      }
      else if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Administrator')
      {
        echo "<a href=\"admin_homepage.php\"><h3><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</h3></a>";
      }
      else
      {
        echo "<a href=\"login_page.php\"><h3><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</h3></a>";
      }
    ?>
  </li>
          
</ul>
        
</div>
<!-- /.navbar-collapse -->
      
</div><!-- /.container-fluid -->
    
</nav>


   
<!-- [/NAV]--> 
    
   
<!-- [/MAIN-HEADING]--> 
   
<section class="main-heading" >
       
<div class="overlay">
           
<div class="container">
               
<div class="row">
                   
<div class="main-heading-content col-md-12 col-sm-12 text-center">
        
<h1 class="main-heading-title"><span class="main-element themecolor" data-elements=" Airline Ticket, Airlion Ticket, Airline Ticket"></span></h1>
 
<h1 class="main-heading-title"><span class="main-element themecolor" data-elements=" Reservation System, Reservation System, Reservation System"></span></h1>
       
<p class="main-heading-text adddi"><br>WELCOME TO,<br/>AIRLIONS RESERVATION SYSTEM</p>
              
   
    <?php
      if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Customer')
      {
        echo "<a href=\"book_tickets.php\" ><i class=\"fa fa-ticket border2\" aria-hidden=\"true\"></i> <span class=\"border3\"><strong>Book Tickets</strong></span></a>";
      }
      else if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Administrator')
      {
        echo "<a href=\"admin_ticket_message.php\" ><i class=\"fa fa-ticket border2\" aria-hidden=\"true\"></i> Book Tickets</a>";
      }
      else
      {
        echo "<a href=\"login_page.php\" ><i class=\"fa fa-ticket border2\" aria-hidden=\"true\"></i><strong> Book Tickets</strong></a>";
      }
    ?>
      
</div>
               
</div>
           
</div>
       
</div>  
      
   
</section>
 
<section class="main-heading" id="home">
       
<div class="overlay">
           
<div class="container">
               
<div class="row">
                   
<div class="main-heading-content col-md-12 col-sm-12 text-center">
        
<h1 class="main-heading-title">We are Airlions<br></h1>
        
<p class="main-heading-text" style="color:black"><strong>the complete freedom for users, where user at his own
system can logon<br> to <a href="index.php">this</a> website and can book his ticket. Our proposed<br> system allows
only registered users to book the tickets, view booked tickets and cancel their tickets.
</strong></p>
        
<div class="btn-bar">
          
<!---<a href="#" class="btn btn-custom theme_background_color"></a>-->
          
<a href="#eight" class="btn btn-custom-outline">Contact Us</a>
        
</div>
      
</div>
               
</div>
           
</div>
       
</div>  
      
   
</section>
    
 
<!-- [/MAIN-HEADING]-->
 
 
 

 
 
 
 
<!-- [INSPIRATION]-->
 
<section class="inspiration" id="four">
     
<div class="overlay">
         
<div class="container">
             
<div class="row">
                
 <article class="col-md-12 text-center">
           
 <div class="intermediate-container">
             
 <div class="subheading">
                 
 <h4>Are You Ready To <span class="themecolor">Enjoy?</span></h4>
           
   </div>
             
 <div class="heading">
              
  <h2>inspire your customer here!</h2>
          
    </div>
              
<div class="">
              
  <a class="btn btn-custom-outline" href="#"><span>get started</span></a>
        
      </div>
        
    </div>
       
   </article>
       
      </div>
    
    </div>
    
 </div>
 
</section>
 
 
<!-- [/INSPIRATION]-->
 
 
<!-- [/SERVICES]-->
 
 
 
<section class="services white-background black" id="three">
     
 <div class="container">
        
<div class="row text-center">
          
<div class="col-md-12">
              
<h3 class="title">We Are <span class="themecolor">Good In</span></h3>
            
<p class="a-slog">	The system makes the overall project management much easier,efficient and highly productive.

</p>
          
</div> <!-- /col -->
        
</div> <!-- /row -->
        
<div class="gap"></div>

        
<div class="row">
          
<div class="col-sm-4">
            
<div class="nim-service margin-bottom">
              
<i class="fa fa-diamond"></i>
              
<div class="nim-service-detail">
                
<h4>Strategy Solutions</h4>
                
<p>The website will allow users with specific roles
(Administrator- maintains the website,Passenger-
Fills the details).
</p>
   
           </div> <!-- /nim-service-detail -->
            
</div> <!-- /nim-service margin-bottom -->
          
</div> <!-- /col -->

          
<div class="col-sm-4">
            
<div class="nim-service margin-bottom">
             
 <i class="fa fa-tablet"></i>
             
 <div class="nim-service-detail">
              
  <h4>End Users</h4>
              
  <p>All specific knowledge or skills are required from the feeder.
1.	Educational level:
2.	Experience: 
3.	Skills: 
</p>
 
             </div> <!-- /nim-service-detail -->
            
</div> <!-- /nim-service margin-bottom -->
          
</div> <!-- /col -->

          
<div class="col-sm-4">
            
<div class="nim-service margin-bottom">
              
<i class="fa fa-magic"></i>
              
<div class="nim-service-detail">
                
<h4>Secure n Safe</h4>
                
<p> Avoid the use of pirated software,ensure
 other removable media are scanned for viruses could minimize
  infection
</p>
 
             </div> <!-- /nim-service-detail -->
            
</div> <!-- /nim-service margin-bottom -->
         
 </div> <!-- /col -->       
        
</div> <!-- end row -->

        
<div class="row">
          
<div class="col-sm-4">
            
<div class="nim-service margin-bottom">
             
 <i class="fa fa-rocket"></i>
             
 <div class="nim-service-detail">
               
 <h4>Technical </h4>
                
<p>The database’s purpose is to create, establish and maintain a workflow among
various entities to facilitate all concerned users.

</p>
          
    </div> <!-- /nim-service-detail -->
            
</div> <!-- /nim-service margin-bottom -->
         
 </div> <!-- /col -->

          
<div class="col-sm-4">
           
 <div class="nim-service margin-bottom">
              
<i class="fa fa-map-marker"></i>
              
<div class="nim-service-detail">
                
<h4>Friendliness</h4>
                
<p>	User friendliness provided in the application with various controls.</p>
             
 </div> <!-- /nim-service-detail -->
            
</div> <!-- /nim-service margin-bottom -->
          
</div> <!-- /col -->

          
<div class="col-sm-4">
            
<div class="nim-service margin-bottom">
             
 <i class="fa fa-paypal"></i>
              
<div class="nim-service-detail">
               
 <h4>Dedicated Support</h4>
                
<p>	The system makes the overall project management much easier and flexible.</p>
              
</div> <!-- /nim-service-detail -->
            
</div> <!-- /nim-service margin-bottom -->
          
</div> <!-- /col -->         
        
</div> <!-- end row -->

        
<div class="row">
          
<div class="col-sm-4">
            
<div class="nim-service margin-bottom">
             
 <i class="fa fa-bar-chart-o"></i>
              
<div class="nim-service-detail">
                
<h4>Truly Multipurpose</h4>
               
 <p>Airline Reservation System contains the details about flight schedules and its fare tariffs,
passenger reservations and ticket records.
</p>
             
 </div> <!-- /nim-service-detail -->
           
 </div> <!-- /nim-service margin-bottom -->
          
</div> <!-- /col -->

          
<div class="col-sm-4">
            
<div class="nim-service margin-bottom">
              
<i class="fa fa-delicious"></i>
              
<div class="nim-service-detail">
               
 <h4>Economic Feasible</h4>
                
<p> The development cost
in creating the system is evaluated against the ultimate benefit derived from the new
systems.
</p>
              
</div> <!-- /nim-service-detail -->
            
</div> <!-- /nim-service margin-bottom -->
         
 </div> <!-- /col -->

          
<div class="col-sm-4">
           
 <div class="nim-service margin-bottom">
              
<i class="fa fa-pencil-square"></i>
             
 <div class="nim-service-detail">
                
<h4>Operational Feasibility</h4>
                
<p>Operational feasibility aspects
of the project are to be taken as an important part of the project implementation. 
</p>
             
 </div> <!-- /nim-service-detail -->
            
</div> <!-- /nim-service margin-bottom -->
          
</div> <!-- /col -->                      
       
 </div> <!-- end row -->

      
</div>  <!-- container -->
    
</section>
 
 
 
<!-- [/SERVICES]-->
 
 
 
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
      
<div class="col-md-4"> <small>&copy; AIRLIONS 2019, All right reserved</small></div>
      
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