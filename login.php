<?php
session_start();

$uname=$_POST['u_name'];
$pass=$_POST['psd'];

require('firstimport.php');

$tbl_name="users"; // Table name

mysqli_select_db($conn,"$db_name")or die("cannot select DB");


$sql="SELECT * FROM $tbl_name WHERE u_name='$uname' and password='$pass'";
//echo "$sql";


$result=mysqli_query($conn,$sql) or trigger_error(mysql_error.$sql);
$count = mysqli_num_rows($result);
$row=mysqli_fetch_array($result);


$sql2="SELECT Tnumber,doj,Name,Age,Sex,Status,DOB,class FROM $tbl_name WHERE (uname='$uname' and Tnumber='$tno' and doj='$doj' and DOB='$DOB' and fromstn='$fromstn' and tostn='$tostn')";
$result2=mysqli_query($conn,$sql2);
$booking = mysqli_num_rows($result2);
if ($booking == 1 ) {
	$_SESSION["booking"] = "booked";
}



if($count < 1)
{
	echo " .... LOGIN TRY  ....";
	$_SESSION['error'] = "1";
	header("location:login1.php"); //
}
elseif($count == 1 && $row['usertype'] == "admin")
{
	$_SESSION['name'] = $uname; 
	echo " ....   LOGIN  ....";
	echo $_SESSION['name'];
	header("location:adminlogin.php");    //
}

elseif ($count == 1 && $row['usertype'] == "user") 
{
	$_SESSION['name'] = $uname; 
	echo " ....   LOGIN  ....";
	echo $_SESSION['name'];
	header("location:index.php");
}

?>

	