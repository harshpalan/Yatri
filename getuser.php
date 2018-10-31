<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: center;}
</style>
</head>
<body>

<?php

$u_name = strval($_GET['u_name']);


require ('firstimport.php');

mysqli_select_db($conn,"$db_name")or die("cannot select DB");

$tbl_name="users";

$sql="SELECT * FROM $tbl_name WHERE u_name = '$u_name'";

$result = mysqli_query($conn,$sql) or die("Error: " . mysqli_error($conn));;

echo "<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Email</th>
<th>Gender</th>
<th>Date of birth</th>
<th>Contact</th>
<th>User type</th>
</tr>";

while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['f_name'] . "</td>";
    echo "<td>" . $row['l_name'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['gender'] . "</td>";
    echo "<td>" . $row['dob'] . "</td>";
    echo "<td>" . $row['mobile'] . "</td>";
    echo "<td>" . $row['usertype'] . "</td>";
    echo "</tr>";
}
echo "</table>";
?>
<h2> Booking Details</h2>
<?php 

$tbl_name="booking";

$sql="SELECT * FROM $tbl_name WHERE uname = '$u_name'";

$result = mysqli_query($conn,$sql) or die("Error: " . mysqli_error($conn));;

echo "<table>
<tr>
<th>Booked by</th>
<th>Train Number</th>
<th>Class</th>
<th>Date of Journey</th>
<th>FROM</th>
<th>TO</th>
<th>Passenger Name</th>
<th>Passenger Age</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['uname'] . "</td>";
    echo "<td>" . $row['Tnumber'] . "</td>";
    echo "<td>" . $row['class'] . "</td>";
    echo "<td>" . $row['doj'] . "</td>";
    echo "<td>" . $row['fromstn'] . "</td>";
    echo "<td>" . $row['tostn'] . "</td>";
    echo "<td>" . $row['Name'] . "</td>";
    echo "<td>" . $row['Age'] . "</td>";
    echo "</tr>";
}
echo "</table>";



 ?>
</body>
</html>