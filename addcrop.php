
<!DOCTYPE HTML>
<html>
<head>
<title>Farmer Management System</title>
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
<div class="navbar navbar-inverse-blue navbar">
    <!--<div class="navbar navbar-inverse-blue navbar-fixed-top">-->
      <div class="navbar-inner">
        <div class="container">
           <div class="navigation">
             <nav id="colorNav">
			   <ul>
				
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
		            <li><a href="addcrop.php">Add Location wise crops</a></li>
		    		
					
		        
		            <li class="last"><a href="adminlogout.php">Logout</a></li>
		        </ul>
		     </div><!-- /.navbar-collapse -->
		    </nav>
		   </div> <!-- end pull-right -->
          <div class="clearfix"> </div>
        </div> <!-- end container -->
      </div> <!-- end navbar-inner -->
    </div> <!-- end navb
<!-- ============================  Navigation End ============================ -->
<div class="grid_1">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.html"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Add Crop Details</li>
     </ul>
   </div>
   <form action="cropadd.php" method="POST">
  <div class="container">
    <h1>ADD CROP DETAILS</h1>
    <hr>

    <label for="STATE"><b>STATE</b></label>
<select name="state" required="">
	<option value="" hidden="" >Select State</option>
<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                         <option value="Andhra_Pradesh">Andhra Pradesh</option>
                                        <option value="Arunachal_Pradesh">Arunachal Pradesh</option>
                                         <option value="Assam">Assam</option>
                                            <option value="Bihar">Bihar</option>
                                               <option value="Chandigarh">Chandigarh</option>
                                                <option value="Chhattisgarh">Chhattisgarh</option>
                                                    <option value="Dadra_and_Nagar_Haveli">Dadra and Nagar Haveli</option>
                                                      <option value="Daman_and_Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal_Pradesh">Himachal Pradesh</option>
<option value="Jammu_and_Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Madhya_Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Orissa">Orissa</option>
<option value="Pondicherry">Pondicherry</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil_Nadu">Tamil Nadu</option>
<option value="Tripura">Tripura</option>
<option value="Uttaranchal">Uttaranchal</option>
<option value="Uttar_Pradesh">Uttar Pradesh</option>
<option value="West_Bengal">West Bengal</option>
               </select>

<label for="SEASON"><b>SEASON</b></label>
<select  name="season" required="">
	<option value="" hidden="" >Select Season</option>                                       
<option value="Kharif">Kharif</option>
<option value="Rabi">Rabi</option>
</select>

<label for="CROP"><b>CROP</b></label>
<select  name="crop" required="">
	<option value="" hidden="" >Select Crop</option>
	                    <option value="Blackgram/Urd">Blackgram/Urd</option>
	                    <option value="Chick Pea">Chick Pea</option>
	                    <option value="Gram">Gram</option>
	                    <option value="Greengram">Greengram</option>
	                    <option value="Horsegram">Horsegram</option>
	                    <option value="Maize">Maize</option>
	                    <option value="Peas">Peas</option>
	                    <option value="Pulses">Pulses</option>
	                    <option value="Redgram/Arhar">Redgram/Arhar</option>
	                    <option value="Rice/Paddy">Rice/Paddy</option>
	                    <option value="Wheat">Wheat</option>
	                    <option value="Masur/Lentil">Masur/Lentil</option>
 </select>


<label for="FROM"><b>FROM</b></label>
<select  name="frommonth" required="">
	<option value="" hidden="" >Select Month From</option>
	                    <option value="January">January</option>
	                    <option value="February">February</option>
	                    <option value="March">March</option>
	                    <option value="April">April</option>
	                    <option value="May">May</option>
	                    <option value="June">June</option>
	                    <option value="July">July</option>
	                    <option value="August">August</option>
	                    <option value="September">September</option>
	                    <option value="October">October</option>
	                    <option value="November">November</option>
	                    <option value="December">December</option>
 </select>
 <label for="FROM TIME"><b> FROM TIME</b></label>
<select  name="fromtime" required="">
	<option value="" hidden="" >Select Month Time</option>
	                    <option value="Beg">Beg</option>
	                    <option value="Mid">Mid</option>
	                    <option value="End">End</option>
	                    
 </select>
 <label for="TO"><b>TO</b></label>
<select  name="tomonth" required="">
	<option value="" hidden="" >Select Month To</option>
	                    <option value="January">January</option>
	                    <option value="February">February</option>
	                    <option value="March">March</option>
	                    <option value="April">April</option>
	                    <option value="May">May</option>
	                    <option value="June">June</option>
	                    <option value="July">July</option>
	                    <option value="August">August</option>
	                    <option value="September">September</option>
	                    <option value="October">October</option>
	                    <option value="November">November</option>
	                    <option value="December">December</option>
 </select>
 <label for="TO TIME"><b> TO TIME</b></label>
<select  name="totime" required="">
	<option value="" hidden="" >Select Month Time</option>
	                    <option value="Beg">Beg</option>
	                    <option value="Mid">Mid</option>
	                    <option value="End">End</option>
	                    
 </select>
 <label for="PERIOD"><b>PERIOD</b></label>
<select  name="period" required="">
	<option value="" hidden="" >Select Period</option>
	                    <option value="Sowing">Sowing</option>
	                    <option value="Harvesting">Harvesting</option>	                    
 </select>

    <hr>

    <button type="submit" class="registerbtn" name="register">Register</button>
  </div>

  
</form>
					
			
</body>
</html>	

