<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}

  mysqli_select_db($conn,'farm');           

if(isset($_POST['submit']))
{
  $name = $_POST['username'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  $state = $_POST['state'];
  
  $address = $_POST['address'];
$aadhar=$_POST["aadhar"];
$mobile=$_POST['mobile'];
   
   $query1=$conn->query("SELECT * FROM  farmers where email='$email'");
   $rowCount=$query1->num_rows;

   $query2=$conn->query("SELECT * FROM  suppliers where name='$name'");
   $rowCount1=$query2->num_rows;
   
   $query3=$conn->query("SELECT * FROM  farmers where aadhar='$aadhar'");
   $rowCount2=$query3->num_rows;

   $query4=$conn->query("SELECT * FROM  suppliers where email='$email'");
   $rowCount3=$query4->num_rows;

   $query5=$conn->query("SELECT * FROM  suppliers where aadhar='$aadhar'");
   $rowCount4=$query5->num_rows;

    $query6=$conn->query("SELECT * FROM  suppliers where mobile='$mobile'");
   $rowCount5=$query6->num_rows;

   if($rowCount>0)
   {
    
    echo "<script type='text/javascript'>alert('Email. Is Already used by farmer');</script>";
    header("refresh:1; url=supplierregister.php");
   } 
   else if($rowCount1>0)
   {
    
    echo "<script type='text/javascript'>alert('Supplier name already exists.');</script>";
    header("refresh:1; url=supplierregister.php");
   } 

   else if($rowCount2>0)
   {
    
    echo "<script type='text/javascript'>alert('Aadhar number already used by farmer.');</script>";
    header("refresh:1; url=supplierregister.php");
   } 
   else if($rowCount3>0)
   {
    
    echo "<script type='text/javascript'>alert('Email already used by supplier.');</script>";
    header("refresh:1; url=supplierregister.php");
   } 
else if($rowCount4>0)
   {
    
    echo "<script type='text/javascript'>alert('Mobile number  already used by supplier.');</script>";
    header("refresh:1; url=supplierregister.php");
   } 

else if($rowCount5>0)
   {
    
    echo "<script type='text/javascript'>alert('Aadhar Number already used by supplier.');</script>";
    header("refresh:1; url=supplierregister.php");
   } 
  else
  {

    $query="INSERT INTO suppliers(name,password,email,state,address,aadhar,mobile)VALUES('$name','$password','$email','$state','$address','$aadhar','$mobile')";

  if(!mysqli_query($conn,$query))
  {
  echo "Not Inserted" . mysqli_error($conn);
  }
  else
  {
   echo "Inserted";
  header("Refresh:2; url=supplierlogin.php");
  }
  } 
}
?>