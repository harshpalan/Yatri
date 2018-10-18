<?php

$uname=$_POST['u_name'];
$mail=$_POST['eid'];

require('firstimport.php');

$tbl_name="users"; // Table name

mysqli_select_db($conn,"$db_name")or die("cannot select DB");

$sql="SELECT * FROM $tbl_name WHERE u_name='$uname'";
$sql2="SELECT * FROM $tbl_name WHERE  and email='$mail'";
$result=mysqli_query($conn,$sql) or trigger_error(mysql_error.$sql);
$result2=mysqli_query($conn,$sql2) or trigger_error(mysql_error.$sql2);
$count = mysqli_num_rows($result);
$count2 = mysqli_num_rows($result2);

 if($count == 1)
 {
  echo "User Name Already Exist";
 }
 else
 {
  echo "OK";
  exit();
 }
 

if($count2 == 1)
 {
  echo "Mail Already Exist";
 }
 else
 {
  echo "OK";
  exit();
 }

?>