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
    <script>
      function showUser(str) {
      if (str == "") {
          document.getElementById("userForm").innerHTML = "";
          return;
      } else { 
          if (window.XMLHttpRequest) {
              // code for IE7+, Firefox, Chrome, Opera, Safari
              xmlhttp = new XMLHttpRequest();
          } else {
              // code for IE6, IE5
              xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
          }
          xmlhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
                  document.getElementById("userForm").innerHTML = this.responseText;
              }
          };
          xmlhttp.open("GET","editprofile2.php?u_name="+str,true);
          xmlhttp.send();
      }
    }

    
    </script>
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
<nav class="navbar-primary">
  <ul class="navbar-primary-menu">
    <li>
      <a href="adminlogin.php"></span><span class="nav-label">User Details</span></a>
      <a href="addtrain.php"></span><span class="nav-label">Trains</span></a>
      <a href="useredit.php"></span><span class="nav-label">Users</span></a>
    </li>
  </ul>
</nav>
<div class="main-content">
  <h1>User Details</h1>

  <form>
  <select name="users" onchange="showUser(this.value)">
  <option value="">Select a person:</option>
  <option value="Harsh">Harsh</option>
  <option value="ForamShah">ForamShah</option>
  <option value="mihirbalsara">mihirbalsara</option>
  <option value="Jitesh9">Jitesh9</option>
  <option value="chintan23">chintan23</option>
  <option value="CHECKMATE">CHECKMATE</option>
  <option value="chaitravinore">chaitravinore</option>
  <option value="csneh">csneh</option>
  </select>
</form>
<br>
<div id="userForm"><h1>Select a user</h1></div>

<div class="span12 pass3 " style="display:none;">
    <div class="span8 well">
      <table style="width:100%;">
      <tr>
        <td><span style="font-weight:bold;font-size:25px;">Profile</span>
      <tr/>
      
      <tr>
        <td>
          <form action="editprofile.php" method="post" enctype="multipart/form-data">
          <div class="span6" style="float:left;width:80%;">
          <table class="table">
          <tr><td >User Name  </td> <td onblur="return name1()"><?php echo $name;?></td></tr>
          <tr><td> First name </td> <td><input name="ln" type="text" value="<?php echo $row['f_name'];?>"></td></tr>
          <tr><td> Last name </td> <td><input name="ln" type="text" value="<?php echo $row['l_name'];?>"></td></tr>
          <tr><td>E-Mail  </td> <td><input name="mail1" type="mail" value="<?php echo $row['email'];?>"></td></tr>
          <tr><td>Dob  </td> <td><input name="dob1" type="text" value="<?php echo $row['dob'];?>"></td></tr>
          <tr><td>Gender  </td>  <td><input name="gnd1" type="text" value="<?php echo $row['gender'];?>"></td></tr>
          <tr><td>Marital Status </td>  <td><input name="mrt1" type="text" value="<?php echo $row['marital'];?>"></td></tr>
          <tr><td>Mobile No.  </td>  <td><input name="mon1" type="text" value="<?php echo $row['mobile'];?>"></td></tr>
          <tr><td>Security Question  </td>  <td><?php echo $row['ques'];?></td></tr>
          <tr><td>Answer  </td>  <td><input name="ans1" type="text" value="<?php echo $row['ans'];?>"></td></tr>
          <tr><td></td> <td><input type="submit" value="Save Profile" class="btn btn-info"></td></tr>
          </table>
          </div>
          </form>
        </td>
      </tr>
      </table>
    </div>
  </div>


</div>
</nav>
</body>
</html>