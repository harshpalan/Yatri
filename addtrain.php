<?php 
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Yatri- Admin</title>
   <link rel="shortcut icon" href="images/favicon.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/logo2.jpg">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link href="css/admincss.css" rel="stylesheet" >
</head>
<body>
  <nav class="navbar navbar-inverse navbar-global navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
       <a class="navbar-brand" href="#"><img src="images/logo3.png"> Yatri - Admin Page</a>
    </div>
    <a style="float: right; color: white">
      <?php
       if(isset($_SESSION['name']))
       {
        echo "Welcome,".$_SESSION['name']."&nbsp;&nbsp;&nbsp;<a href=\"logout.php\" class=\"btn btn-info\" style=\"float: right;\">Logout</a>";
       }
       else
       {
        $_SESSION['error']=15;
        header("location:login1.php");
       } 
       ?>
      </a>
  </div>
</nav>
<nav class="navbar-primary" style="height: 2600px;">
  <ul class="navbar-primary-menu">
    <li>
      <a href="adminlogin.php"></span><span class="nav-label">User Details</span></a>
      <a href="addtrain.php"></span><span class="nav-label">Trains</span></a>
    </li>
  </ul>
</nav>
<div class="main-content">
  <h1 style="text-align: center;">Add Train Details</h1>
  <form class="form-horizontal" action="addtrain2.php" method="POST">
    Train Number: <input class="form-control" type="text" name="Number" value="" placeholder="12348" required>
  <br><br>
  Train Name: <input class="form-control" type="text" name="Name" placeholder="CHENNAI EXPRESS" required>
   <br><br>
  Origin: <input class="form-control" type="text" name="Origin" placeholder="BCT" required>
  <br><br>
  Destination: <input class="form-control" type="text" name="Destination" placeholder="ADI" required>
  <br><br>
  Arrival: <input class="form-control" type="text" name="Arrival" placeholder="15:00" required>
  <br><br>
  Departure: <input class="form-control" type="text" name="Departure" placeholder="8:00" required>
  <br><br>Schedule- 
  <br><br>
  MON: <input class="form-control" type="text" name="Mon" placeholder="Y/N" required>
  <br><br>
  TUE: <input class="form-control" type="text" name="Tue" placeholder="Y/N" required>
  <br><br>
  WED: <input class="form-control" type="text" name="Wed" placeholder="Y/N" required>
  <br><br>
  THRUS: <input class="form-control" type="text" name="Thu" placeholder="Y/N" required>
  <br><br>
  FRI: <input class="form-control" type="text" name="Fri" placeholder="Y/N" required>
  <br><br>
  SAT: <input class="form-control" type="text" name="Sat" placeholder="Y/N" required>
  <br><br>
  SUN: <input class="form-control" type="text" name="Sun" placeholder="Y/N" required>
  <br><br>
  COST-
  <br><br>
  1A: <input class="form-control" type="text" name="1A" placeholder="5/10" required>
  <br><br>
  2A: <input class="form-control" type="text" name="2A" placeholder="5/10" required>
  <br><br>
  3A: <input class="form-control" type="text" name="3A" placeholder="5/10" required>
  <br><br>
  SL: <input class="form-control" type="text" name="SL" placeholder="5/10" required>
  <br><br>SEAT COUNT- 
  <br><br>
  GENERAL: <input class="form-control" type="text" name="General" placeholder="5/10" required>
  <br><br>
  LADIES<input class="form-control" type="text" name="Ladies" placeholder="5/10" required>
  <br><br>
  TATKAL: <input class="form-control" type="text" name="Tatkal" placeholder="5/10" required>
  <br><br>
  <button type="submit" class="btn btn-default" style="float: inherit;">Submit</button>
  </form>
  <p></p>
</div>
</nav>
</body>
</html>