
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
<script>
function validation()
    {
        var username=document.getElementById("username").value;
        var password=document.getElementById("password").value;
        var email=document.getElementById("email").value;
        var address=document.getElementById("address").value;
        var farmaddress=document.getElementById("farmaddress").value;
        var aadhar=document.getElementById("aadhar").value;
                var correct=/^[A-Za-z ]+$/;;
                            var addressmatch=/^[a-zA-Z0-9\s,'-/]*$/;
            var emailmatch=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                        var aadharmatch=/^\d{4}\s\d{4}\s\d{4}$/;


         if(username=="")
        {
            alert("Name Cannot be empty");
            return false;
        }
         
        else if (!username.match(correct)) 
        {
          alert("username Name Can only have characters and space.");
            return false;
        }
        else if((password.length<6)||(password.length>14))
            {
                alert("Enter password with length between 6 to 14");
                return false;
                
                
            }
            else if(password.search(/[0-9]/)==-1)
            {
                alert("Password must have a numeric digit");
                return false;
                
            }
            else if(password.search(/[a-z]/)==-1)
            {
                alert("Password must have a Lowercase alphabet ");
                return false;
            }
            else if(password.search(/[A-Z]/)==-1)
            {
                alert("Password must have a Uppercase alphabet ");
                return false;
            }
            else if(password.search(/[!\@\#\$\%\^\&\*\(\)\_\+]/)==-1)
            {
                alert("Password must have a special character ");
                return false;
            }
            if(email=="")
        {
            alert("Email Cannot be empty");
            return false;
        }
         
        else if (!email.match(emailmatch)) 
        {
          alert("Enter valid email in the format of xy@z.com");
            return false;
        }
        else if (!aadhar.match(aadharmatch)) 
        {
          alert("Enter valid aadhar number.Aadhar number is a 12 digit numeric number. Enter space after every 4 digits.");
            return false;
        }
        else if (!address.match(addressmatch)) 
        {
          alert("Enter valid address.With no special characters");
            return false;
        }
        else if (!farmaddress.match(addressmatch)) 
        {
          alert("Enter valid farm address.With no special characters");
            return false;
        }

            
        else
          return true;

  }
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
                  <ul class="dropdown-menu" role="menu"> <li><a href="farmerlogin.php">Seeds</a></li>  
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
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.php"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Farmer Registration</li>
     </ul>
   </div>
   <div class="services">
      <div class="col-sm-16 login_left">
       <form action="register_submit.php" method="POST" onSubmit="return validation()">
          <div class="form-group">
          <label for="edit-name">Name <span class="form-required" title="This field is required.">*</span></label>
          <input type="text" id="username" name="username" value="" size="60" maxlength="60" class="form-text required" required="">
        </div>
        <div class="form-group">
          <label for="edit-pass">Password <span class="form-required" title="This field is required.">*</span></label>
          <input type="text" id="password" name="password" size="60" maxlength="128" class="form-text required" required="">
        </div>
        <div class="form_group">
          <label for="edit-name">Email <span class="form-required" title="This field is required.">*</span></label>
          <input type="text" id="email" name="email" value="" size="60" maxlength="60" class="form-text required" required="">
        </div>
      <div class="form_group">
      
       <div class="col-sm-16 form_box2">
                   <div class="select-block1">
            <label for="edit-pass">State <span class="form-required" title="This field is required." name="age">*</span></label>
        <select name="state" id="state" required="">
                    <option value="" hidden="">Select State</option>
          <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                         <option value="Andhra Pradesh">Andhra Pradesh</option>
                                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                         <option value="Assam">Assam</option>
                                            <option value="Bihar">Bihar</option>
                                               <option value="Chandigarh">Chandigarh</option>
                                                <option value="Chhattisgarh">Chhattisgarh</option>
                                                    <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                                                      <option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
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
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Tripura">Tripura</option>
<option value="Uttaranchal">Uttaranchal</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="West Bengal">West Bengal</option>
               </select>
         </div>
        </div>
    </div>

      <div class="form-group">
          <label for="edit-name">Address <span class="form-required" title="This field is required.">*</span></label>
          <input type="text" id="address" name="address" value="" size="60" maxlength="60" class="form-text required" required="">
        </div>
      <div class="form-group">
          <label for="edit-name">Farm Land Address <span class="form-required" title="This field is required.">*</span></label>
          <input type="text" id="farmaddress" name="farmaddress" value="" size="60" maxlength="60" class="form-text required" required="">
        </div>
        <div class="form-group">
          <label for="edit-name">Aadhar Number <span class="form-required" title="This field is required.">*</span></label>
          <input type="text" id="aadhar" name="aadhar" value="" size="60" maxlength="60" class="form-text required" required="">
        </div>
        <div class="form-group form-group1">
                <label class="col-sm-1 control-lable" for="sex">Sex : </label>
                <div class="col-sm-5">
                    <div class="radios">
                <label for="radio-01" class="label_radio">
                    <input type="radio" name="gender"  value="male" required=""> Male
                </label>
                <label for="radio-02" class="label_radio">
                    <input type="radio"  name="gender" value="female"> Female
                </label>
                  </div>
                </div>
                <div class="clearfix"> </div>
             </div>
        <div class="form_group">
          <label for="edit-pass">DOB <span class="form-required" title="This field is required." name="age">*</span></label>
            <div class="age_grid">
             <div class="col-sm-4 form_box">
                  <div class="select-block1">
                    <select id="date" name="date" required="">
                      <option value="" hidden="">Date</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                      <option value="13">13</option>
                      <option value="14">14</option>
                      <option value="15">15</option>
                      <option value="16">16</option>
                      <option value="17">17</option>
                      <option value="18">18</option>
                      <option value="19">19</option>
                      <option value="20">20</option>
                      <option value="21">21</option>
                      <option value="22">22</option>
                      <option value="23">23</option>
                      <option value="24">24</option>
                      <option value="25">25</option>
                      <option value="26">26</option>
                      <option value="27">27</option>
                      <option value="28">28</option>
                      <option value="29">29</option>
                      <option value="30">30</option>
                      <option value="31">31</option>
                    </select>
                  </div>
            </div>
            <div class="col-sm-4 form_box2">
                   <div class="select-block1">
                    <select id="month" name="month" required="">
                      <option value="" hidden="">Month</option>
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
                  </div>
                 </div>
                 <div class="col-sm-4 form_box1">
                   <div class="select-block1">
                    <select id="year" name="year" required="">
                      <option value="" hidden="">Year</option>

                      <option value="1959">1959</option>
                      <option value="1960">1960</option>
                      <option value="1961">1961</option>
                      <option value="1962">1962</option>
                      <option value="1963">1963</option>
                      <option value="1964">1964</option>
                      <option value="1965">1965</option>
                      <option value="1966">1966</option>
                      <option value="1967">1967</option>
                      <option value="1968">1968</option>
                      <option value="1969">1969</option>
                      <option value="1970">1970</option>
                      <option value="1971">1971</option>
                      <option value="1972">1972</option>
                      <option value="1973">1973</option>
                      <option value="1974">1974</option>
                      <option value="1975">1975</option>
                      <option value="1976">1976</option>
                      <option value="1977">1977</option>
                      <option value="1978">1978</option>
                      <option value="1979">1979</option>

                      <option value="1980">1980</option>
                      <option value="1981">1981</option>
                      <option value="1982">1982</option>
                      <option value="1983">1983</option>
                      <option value="1984">1984</option>
                      <option value="1985">1985</option>
                      <option value="1986">1986</option>
                      <option value="1987">1987</option>
                      <option value="1988">1988</option>
                      <option value="1989">1989</option>
                      <option value="1990">1990</option>
                      <option value="1991">1991</option>
                      <option value="1992">1992</option>
                      <option value="1993">1993</option>
                      <option value="1994">1994</option>
                      <option value="1995">1995</option>
                      <option value="1996">1996</option>
                      <option value="1997">1997</option>
                      <option value="1998">1998</option>
                      <option value="1999">1999</option>
                      <option value="2000">2000</option>
                      </select>
                   </div>
                  </div>
                  <div class="clearfix"> </div>
                 </div>
              </div>
              
        <div class="form-actions" >
          <input type="submit" id="submit" name="submit" value="Submit" class="btn_1 submit">
        </div>
     </form>
    </div>
    <div class="container signin">
    <p>Already have a farmer account? <a href="farmerlogin.php">Sign in</a>.</p>
  </div>
    <div class="clearfix"> </div>
   </div>
  </div>
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
</body>
</html> 