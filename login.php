<?php
session_start();

$uname=$_POST['user'];
$pass=$_POST['psd'];

require('firstimport.php');

$tbl_name="users"; // Table name

mysqli_select_db($conn,"$db_name")or die("cannot select DB");


$sql="SELECT * FROM $tbl_name WHERE f_name='$uname' and password='$pass'";
echo "$sql";


$result=mysqli_query($conn,$sql) or trigger_error(mysql_error.$sql);
$count = mysqli_num_rows($result);
$row=mysqli_fetch_array($result);

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
	header("location:index.php");    //
}

elseif ($count == 1 && $row['usertype'] == "user") 
{
	$_SESSION['name'] = $uname; 
	echo " ....   LOGIN  ....";
	echo $_SESSION['name'];
	header("location:reservation.php");
}

?>

	