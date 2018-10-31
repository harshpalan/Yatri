<?php
session_start();
require('firstimport.php');
if(isset($_SESSION['name'])){}
	else{
		header("location:login1.php");	
	}
 require('firstimport.php');

$tbl_name="train_list";

mysqli_select_db($conn,"$db_name")or die("cannot select DB");

$Number=$_POST['Number'];
$Name=$_POST['Name'];
$Origin=$_POST['Origin'];
$Destination=$_POST['Destination'];
$Arrival=$_POST['Arrival'];
$Departure=$_POST['Departure'];
$Mon=$_POST['Mon'];
$Tue=$_POST['Tue'];
$Wed=$_POST['Wed'];
$Thu=$_POST['Thu'];
$Fri=$_POST['Fri'];
$Sat=$_POST['Sat'];
$Sun=$_POST['Sun'];
$FA=$_POST['1A'];
$SA=$_POST['2A'];
$TA=$_POST['3A'];
$SL=$_POST['SL'];
$General=$_POST['General'];
$Ladies=$_POST['Ladies'];
$Tatkal=$_POST['Tatkal'];

$sql= "INSERT INTO $tbl_name(Number, Name, Origin, Destination, Arrival, Departure, Mon, Tue, Wed, Thu, Fri, Sat, Sun, 1A, 2A, 3A, SL, General, Ladies, Tatkal) VALUES('$Number', '$Name', '$Origin', '$Destination', '$Arrival', '$Departure', '$Mon', '$Tue', '$Wed', '$Thu', '$Fri', '$Sat', '$Sun', '$FA', '$SA', '$TA', '$SL', '$General', '$Ladies', '$Tatkal')";

$result = mysqli_query($conn,$sql) or die("Error: " . mysqli_error($conn));;

$message = "TRAIN HAS BEEN ADDED";
echo "<script type='text/javascript'>alert('$message');</script>";

header("location:addtrain.php");
?>