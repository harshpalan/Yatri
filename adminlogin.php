<?php 
session_start();
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Yatri- Admin</title>
	<link rel="shortcut icon" href="images/logo2.jpg">
	<link href="css/bootstrap.min.css" rel="stylesheet" >
	<link href="css/bootstrap.css" rel="stylesheet" >
	<link href="css/admincss.css" rel="stylesheet" >
</head>
<body>
	<!-- <div class="navbar">
			<div class="navbar-inner">
				<div class="container" >
				<a class="brand" href="#" style="color:#000;">Train Details</a>
				<a class="brand" href="#" style="color:#000;">User Details</a>
				</div>
			</div>
		</div> -->
		<?php
			require('firstimport.php');

			$tbl_name="users"; // Table name

			mysqli_select_db($conn,"$db_name")or die("cannot select DB");
			$sql="SELECT * FROM $tbl_name ";
			$result=mysqli_query($conn,$sql) or trigger_error(mysql_error.$sql);
			$count = mysqli_num_rows($result);
			// $row=mysqli_fetch_array($result);
			echo "<table border='1'>
			<tr>
			<th>Firstname</th>
			<th>Lastname</th>
			<th>Email</th>
			<th>Gender</th>
			<th>DOB</th>
			<th>Mobile No</th>
			</tr>";

			while($row = mysqli_fetch_array($result))
			{
			echo "<tr>";
			echo "<td>" . $row['f_name'] . "</td>";
			echo "<td>" . $row['l_name'] . "</td>";
			echo "<td>" . $row['email'] . "</td>";
			echo "<td>" . $row['gender'] . "</td>";
			echo "<td>" . $row['dob'] . "</td>";
			echo "<td>" . $row['mobile'] . "</td>";
			echo "</tr>";
			}
			echo "</table>";

		?>

</body>
</html>