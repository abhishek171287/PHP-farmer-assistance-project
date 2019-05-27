
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
		                <li><a href="matches.php">Seeds</a></li>  
		                <li><a href="viewed-profile.php">Fertilizers</a></li>
		                <li><a href="viewed-not_contacted.php">Pesticides</a></li>
		                <li><a href="members.php">Farm Machinery</a></li>
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
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.html"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Register</li>
     </ul>
   </div>
   

<div class="container">
<form onSubmit="return validation()">
<table>
<tr>
<td>
Roll no:
</td>
<td>
<input id="rollno" value=""></input>
</td>
</tr>
<tr>
<td>First Name:
</td>
<td>
<input type="text" id="firstname" value="" ></input>
</td>
</tr>
<tr>
<td>Middle Name:
</td>
<td>
<input type="text" id="middlename" value=""></input>
</td>
</tr>
<tr>
<td>Last Name:
</td>
<td>
<input type="text" id="lastname" value="" ></input>
</td>
</tr>
<tr>
<td>Password:</td>
<td><input type="text" id="password" value=""></input>
</td>
</tr>
<tr>
<td>Age:</td>
<td><input type="text" id="age" value=""></input>
</td>
</tr>
<tr>
<td>Mobile No:</td>
<td><input type="text" id="mobileno" value=""></input></td>
</tr>
<tr>
<td>Email Address:</td>
<td><input type="text" id="email" value=""></input></td>
</tr>
<tr>
<td>Marks:</td>
<td><input type="text" id="marks" value=""></input></td>
<td><span style="color:red">*Add (+/-) symbol ----optional</span></td>
</tr>

<tr>
<td>Grade:</td>
<td><input type="text" id="grade" value=""></input></td>
</tr>



<tr>
<td>
<input  type="submit" value="Submit" ></input>
</td>
</tr>
</table>
</form>
				
</div>




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
		       <p>Copyright © 2019 FarmersFriend . All Rights Reserved  |</a> </p>
	        </div>
      </div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$("#submitform").click(function(e){

			e.preventDefault();
			            var letters = /^[A-Za-z ]+$/;
			      var addresss=/^[a-zA-Z0-9\s,'-]*$/;
			      var mail=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
			   var password=
			      var aadhar=/^\d{4}\s\d{4}\s\d{4}$/;

			      var namematch=letters.test($("#username").val());
			      var addressmatch=addresss.test($("#address").val());
			      var farmaddressmatch=addresss.test($("#farmaddress").val());
			      var emailmatch=mail.test($("#email").val());
			      var aadharmatch=aadhar.test($("#aadhar").val());

			 

			if ($("#username").val() == '')
			{
				$("#usernameError").html('*Name is required');
					return false;

			}
			
			else if(namematch==false)
			{
				$("#usernameError").html('* Username is characters only .');
				return false;
				
			}

			
			else if($("#username").val().length < 3)
			{

				$("#usernameError").html('*  Name must be more than 2 characters.');
				return false;
			}

			
			

			else if($("#dob").val()=='')	
			{
				$("#dobError").html('* Date Of Birth is required.');
				return false;
			}
			else if($("#gender").val()=='')	
			{
				$("#genderError").html('* Gender is required.');
				return false;
			}
			else if($("#address").val()=='')	
			{
				$("#addressError").html('* Address is required.');
				return false;
			}

			else if(addressmatch==false)
			{
				$("#addressError").html('* Address cannot have special characters. ');
				return false;
			}
			else if($("#farmaddress").val()=='')	
			{
				$("#farmaddressError").html('* Address is required.');
				return false;
			}

			else if(farmaddressmatch==false)
			{
				$("#farmaddressError").html('* Farm address cannot have special characters. ');
				return false;
			}
			

			else if($("#state").val()=='')	
			{
				$("#stateError").html('* state is required.');
				return false;
			}
    
    		
			 
			 else if($("#email").val()=='')	
			{
				$("#emailError").html('* Email is required.');
				return false;
			}
			else if(emailmatch==false)
			{
				$("#emailError").html('* Email is invalid ');
				return false;
			}
			
			else if($("#aadhar").val()=='')	
			{
				$("#aadharError").html('* Aadhar Number is required.');
				return false;
			}
			else if(aadharmatch==false)
			{
				$("#aadharError").html('* Your Aadhar Number should be 12 digit numeric with space after every 4 digit. ');
				return false;
			}
			

			else
			{
				return true;
			}	
			
		});

		
             



		
	});
</script>

<script type="text/javascript">
function checkRollStatus()
{
    //alert("came");
var rollno=$("#rollno").val();
var name=$("#candidatename").val();
$.ajax({
    type:'post',
        url:'checkroll.php',//data: $("#form-data").serialize(),
        data:'rollno='+rollno,
					success:function(html)
					{
						$('#rollnoError').html(html);

					}
        
 });
}

</script>

<script type="text/javascript">
function checkmailStatus()
{
    //alert("came");
var email=$("#email").val();
$.ajax({
    type:'post',
        url:'checkemail.php',//data: $("#form-data").serialize(),
        data:'email='+email,
					success:function(html)
					{
						$('#emailError').html(html);

					}
        
 });
}
</script>
<script type="text/javascript">
function checkphoneStatus()
{
    //alert("came");
var mobile=$("#mobile").val();
$.ajax({
    type:'post',
        url:'checkphone.php',//data: $("#form-data").serialize(),
        data:'mobile='+mobile,
					success:function(html)
					{
						$('#mobileError').html(html);

					}
        
 });
}
</script>
<script type="text/javascript">
function checkchalanstatus()
{
    //alert("came");
var chalan=$("#chalan").val();
$.ajax({
    type:'post',
        url:'checkchalan.php',//data: $("#form-data").serialize(),
        data:'chalan='+chalan,
					success:function(html)
					{
						$('#chalanError').html(html);

					}
        
 });
}
</script>
<script type="text/javascript">
function checkaadharStatus()
{
    //alert("came");
var aadhar=$("#aadhar").val();
$.ajax({
    type:'post',
        url:'checkaadhar.php',//data: $("#form-data").serialize(),
        data:'aadhar='+aadhar,
					success:function(html)
					{
						$('#aadharError').html(html);

					}
        
 });
}
</script>

<script type="text/javascript">
$('#rollno').on('change',function()
		{
			var rollno=$(this).val();
			if(rollno)
			{
				$.ajax(
				{
					type:'POST',
					url:'ajaxData1.php',
					data:'rollno='+rollno,

					success:function(html)
					{
						$('#rank').html(html);
					}
				});

			}else 
			{
				$('#rank').html('<option value="">ENTER NAME FIRST</option>');
			}
		});

</script>	

<script type="text/javascript">
$('#rank').on('change',function()
		{
			var rank=$(this).val();
			if(rank)
			{
				$.ajax(
				{
					type:'POST',
					url:'ajaxData2.php',
					data:'rank='+rank,

					success:function(html)
					{
						$('#institute').html(html);
					}
				});

			}else 
			{
				$('#institute').html('<option value="">CHECK RANK FIRST</option>');
			}
		});

</script>



<script type="text/javascript">
function checknameStatus()
{
    //alert("came");
	var rollno=$("#rollno").val();
	var name=$("#candidatename").val();
	$.ajax
	({
    	type:'post',
        url:'checkname.php',
        data: $("#form-data").serialize(),
        //data:'candidatename='+candidatename,
       
					success:function(html)
					{
						$('#candidatenameError').html(html);

					}
        
 	});
}

</script>	

</body>

</html>
