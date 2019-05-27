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

if(isset($_POST['register']))
{
$state=$_POST["state"];
$crop=$_POST["crop"];
$season=$_POST["season"];
$from=$_POST["frommonth"];
$fromtime=$_POST["fromtime"];
$to=$_POST["tomonth"];
$totime=$_POST["totime"];
$period=$_POST["period"];


$query = "insert into addcrop(state,crop,season,frommonth,fromtime,tomonth,totime,period) values('$state','$crop','$season','$from','$fromtime','$to','$totime','$period')";
//$query="INSERT INTO addcrop(state,crop,season,frommonth,fromtime,tomonth,totime,period)VALUES('$state','$crop')

if(!mysqli_query($conn,$query))
{
	echo "Not Inserted" . mysqli_error($conn);
}
else
{
	echo "Inserted";
header("Refresh:2; url=addcrop.php");
}
mysqli_close($conn);
}
?>
