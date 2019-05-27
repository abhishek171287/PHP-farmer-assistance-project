
<!DOCTYPE HTML>
<html>
<head>
<title>Farm Management System</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Marital Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<!----font-Awesome----->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!----font-Awesome----->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
</head>
<body>
<!-- ============================  Navigation Start =========================== -->
 <div class="navbar navbar-inverse-blue navbar">
    <!--<div class="navbar navbar-inverse-blue navbar-fixed-top">-->
      <div class="navbar-inner navbar-inner_1">
        <div class="container">
           <div class="navigation">
             <nav id="colorNav">
			   <ul>
				<li class="green">
					<a href="#" class="icon-home"></a>
					<ul>
						<li><a href="login.php">Login</a></li>
					    <li><a href="register.php">Register</a></li>
					</ul>
				</li>
			   </ul>
             </nav>
           </div>
           <h2 style="color:maroon;font-family:cursive;font-style:italic;"><a class="brand" href="index.php">FarmersFriend</a></h2>
           <div class="pull-right">
          	<nav class="navbar nav_bottom" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
		  <div class="navbar-header nav_2">
		      <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">Menu
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#"></a>
		   </div> 
		   <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
		        <ul class="nav navbar-nav nav_1">
		            <li><a href="index.php">Home</a></li>
		            <li><a href="about.php">Location wise crops</a></li>
		    		<li class="dropdown">
		              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Agricultural Products<span class="caret"></span></a>
		              <ul class="dropdown-menu" role="menu">
		              	 <li><a href="farmerlogin.php">Seeds</a></li>  
		                <li><a href="farmerlogin.php">Fertilizers</a></li>
		                <li><a href="farmerlogin.php">Pesticides</a></li>
		                <li><a href="farmerlogin.php">Farm Machinery</a></li>
		              </ul>
		            </li>
					<li class="dropdown">
		              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Map View<span class="caret"></span></a>
		              <ul class="dropdown-menu" role="menu">
		                <li><a href="search.php">Irrigated-Unirrigated Land</a></li>
		                <li><a href="profile.php">Agricultural Land</a></li>
		              </ul>
		            </li>
		            <li class="dropdown">
		              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Government Policies<span class="caret"></span></a>
		              <ul class="dropdown-menu" role="menu">
		                <li><a href="inbox.php">Schemes</a></li>
	                <li><a href="inbox.php">New Schemes</a></li>
		                <li><a href="inbox.php">Compensations</a></li>
		              </ul>
		            <li class="last"><a href="contact.php">Contacts</a></li>
		        </ul>
		     </div><!-- /.navbar-collapse -->
		    </nav>
		   </div> <!-- end pull-right -->
          <div class="clearfix"> </div>
        </div> <!-- end container -->
      </div> <!-- end navbar-inner -->
    </div> <!-- end navbar-inverse-blue -->
<!-- ============================  Navigation End ============================ -->
<section id="intro" class="intro">
		<div class="container ">
			<div class="col-lg-12">
				<br><br>
				<h1 class="text-warning text-center">LOGIN</h1>	
				 <br>
				 <table class="table table-stripped table-hover table-bordered">
				 	<tr class=" text-center">
				 		<th > <a href="farmerlogin.php">
<img border="0" alt="FARMER LOGIN" src="farmer.jpg" width="100" height="100">FARMER LOGIN</th>
				 		<th ><a href="supplierlogin.php">
<img border="0" alt="SUPPLIER LOGIN" src="supplier.jpg" width="100" height="100">SUPPLIER LOGIN</th>
				  		<th ><a href="adminlogin.php">
<img border="0" alt="ADMIN LOGIN" src="admin.jpg" width="100" height="100">ADMIN LOGIN</th>
				 	</tr>	
				 	
				 </table>	
				 <div align="center">
    			<br />
   				 
   			 	</div>
			</div>	
		</div>
     </section>


<div class="footer">
    	<div class="container">
    		<div class="col-md-4 col_2">
    			<h4>About Us</h4>
    			<p>""</p>
    		</div>
    		<div class="col-md-2 col_2">
    			<h4>Help & Support</h4>
    			<ul class="footer_links">
    				<li><a href="#">24x7 Live help</a></li>
    				<li><a href="contact.html">Contact us</a></li>
    				<li><a href="#">Feedback</a></li>
    				<li><a href="faq.html">FAQs</a></li>
    			</ul>
    		</div>
    		<div class="col-md-2 col_2">
    			<h4>Quick Links</h4>
    			<ul class="footer_links">
    				<li><a href="privacy.html">Privacy Policy</a></li>
    				<li><a href="terms.html">Terms and Conditions</a></li>
    				<li><a href="services.html">Services</a></li>
    			</ul>
    		</div>
    		<div class="col-md-2 col_2">
    			<h4>Social</h4>
    			<ul class="footer_social">
				  <li><a href="#"><i class="fa fa-facebook fa1"> </i></a></li>
				  <li><a href="#"><i class="fa fa-twitter fa1"> </i></a></li>
				  <li><a href="#"><i class="fa fa-google-plus fa1"> </i></a></li>
				  <li><a href="#"><i class="fa fa-youtube fa1"> </i></a></li>
			    </ul>
    		</div>
    		<div class="clearfix"> </div>
    		<div class="copy">
		       <p>Copyright © 2019 FarmersFriend . All Rights Reserved</h2></p>
	        </div>
      </div>
</div>
</body>
</html>	