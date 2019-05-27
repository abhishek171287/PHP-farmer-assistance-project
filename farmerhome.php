<?php
   session_start();
$username=$_SESSION['login_user'];
?>

<!DOCTYPE HTML>
<html>
<head>
<titl></title>
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
      <div class="navbar-inner">
        <div class="container">
           <div class="navigation">
             <nav id="colorNav">
			   <ul>
				<li class="green">
					<a href="#" class="icon-home"></a>
					<ul>
						
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
		                    <li class="last"><a href="farmerhome.php">Your Details</a></li>
					
		            <li class="last"><a href="suppliersnearyou.php">Suppliers Near You</a></li>

		            <li class="last"><a href="adminlogout.php">Logout</a></li>
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
				<h1 class="text-warning text-center">WELCOME Farmer :<?php echo $username ?>.YOUR DETAILS</h1>	
				 <br>
				 <table id="table_id" class="table table-stripped table-hover table-bordered">
  <thead>
          <tr class=" text-center">
            <th class=" text-center" bgcolor="BLUEVIOLET">Name</th>
            <th class=" text-center" bgcolor="FUCHSIA">Password</th>
            <th class=" text-center" bgcolor="CRIMSON">E-Mail</th>
            <th class=" text-center" bgcolor="GREEN">State</th>
            <th class=" text-center" bgcolor="MISTYROSE">  Address</th>
                        <th class=" text-center" bgcolor="CYAN"> Farm Address</th>
            <th class=" text-center" bgcolor="GOLD">Date Of Birth</th>
            <th class=" text-center" bgcolor="ORCHID">Gender</th>
            <th class=" text-center" bgcolor="MISTYROSE">Aadhar Number</th>

          </tr> 
    </thead>      
    <tbody>
          <?php

            $conn = mysqli_connect("localhost","root","","farm");
             $result=mysqli_query($conn,"SELECT * FROM farmers WHERE username= '$username'");

             while($row=mysqli_fetch_assoc($result)):
             ?>


          <tr class="text-center">

            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['password']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['state']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['farmadress']; ?></td>
            <td><?php echo $row['date'].$row['month']. $row['year'] ; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><?php echo $row['aadhar']; ?></td>


          </tr>

                       <?php endwhile; ?>
        </tbody>
      </table>

       <link rel="stylesheet"  href="bootstrap.css"/>
      <script src="tables/js/jquery.js"></script>


      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>


      <script >
        $(".table").DataTable();
      </script>


	
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
    			<p></p>
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
                    <p>Copyright © 2019 FarmersFriend . All Rights Reserved  |</span></p>
	        </div>
    	</div>
    </div>
</body>
</html>	