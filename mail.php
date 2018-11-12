<<<<<<< HEAD
<?php 
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;



require ('firstimport.php');
if(isset($_POST['button_pressed']))
    $tbl_name = "booking";
    $tbl2 ="users";
    mysqli_select_db($conn,"$db_name") or die("cannot select db");
    $uname = $_SESSION['name'];
    echo "$uname";

    $sql = "SELECT * FROM $tbl_name WHERE uname='".$uname."'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);
    $from = $row['fromstn']; 
    $to = $row['tostn'];
    $doj = $row['doj'];
    $status = $row['Status'];


    $sql2 = "SELECT * FROM users WHERE u_name='$uname'";
    
    $result2 = mysqli_query($conn,$sql2);
    $row1 = mysqli_fetch_array($result2);
    $email = $row1['email'];
    $fname = $row1['f_name'];

require("C:/xampp/htdocs/Yatri/PHPMailer/src/PHPMailer.php");
require("C:/xampp/htdocs/Yatri/PHPMailer/src/SMTP.php");
require("C:/xampp/htdocs/Yatri/PHPMailer/src/Exception.php");

    $mail = new PHPMailer;
    
    $mail->isSMTP(); // enable SMTP

    $mail->SMTPDebug = 2; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587; // or 587
    $mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for Gmail
    $mail->IsHTML(true);
    $mail->Username = 'help.yatri@gmail.com';
    $mail->Password = 'XXXXXXX';
    $mail->setFrom("help.yatri@gmail.com","Yatri");
    $mail->Subject = "Your booking with yatri";
    $mail->Body = "Dear ".$fname.",<br> Congratulations! Your trip booking with Yatri to ".$to." from ".$from." station has been succesfully booked.The date of journey is ".$doj." and has ".$status." status currently.<br>Please be updated for further details.<br>-Best Regards,<br> <i>Team Yatri</i>";
     //add user email here

    $mail->AddAddress($email); // Add recipients

     if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
     } else {
        echo "Message has been sent";
        header("location:display.php");
     }
=======
<?php 
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;



require ('firstimport.php');
if(isset($_POST['button_pressed']))
    $tbl_name = "booking";
    $tbl2 ="users";
    mysqli_select_db($conn,"$db_name") or die("cannot select db");
    $uname = $_SESSION['name'];
    echo "$uname";

    $sql = "SELECT * FROM $tbl_name WHERE uname='".$uname."'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);
    $from = $row['fromstn']; 
    $to = $row['tostn'];
    $doj = $row['doj'];
    $status = $row['Status'];


    $sql2 = "SELECT * FROM users WHERE u_name='$uname'";
    
    $result2 = mysqli_query($conn,$sql2);
    $row1 = mysqli_fetch_array($result2);
    $email = $row1['email'];
    $fname = $row1['f_name'];

require("C:/xampp/htdocs/Yatri/PHPMailer/src/PHPMailer.php");
require("C:/xampp/htdocs/Yatri/PHPMailer/src/SMTP.php");
require("C:/xampp/htdocs/Yatri/PHPMailer/src/Exception.php");

    $mail = new PHPMailer;
    
    $mail->isSMTP(); // enable SMTP

    $mail->SMTPDebug = 2; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587; // or 587
    $mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for Gmail
    $mail->IsHTML(true);
    $mail->Username = 'help.yatri@gmail.com';
    $mail->Password = 'XXXXXXX';
    $mail->setFrom("help.yatri@gmail.com","Yatri");
    $mail->Subject = "Your booking with yatri";
    $mail->Body = "Dear ".$fname.",<br> Congratulations! Your trip booking with Yatri to ".$to." from ".$from." station has been succesfully booked.The date of journey is ".$doj." and has ".$status." status currently.<br>Please be updated for further details.<br>-Best Regards,<br> <i>Team Yatri</i>";
     //add user email here

    $mail->AddAddress($email); // Add recipients

     if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
     } else {
        echo "Message has been sent";
        header("location:display.php");
     }
>>>>>>> bb10c04382c30ab74298dacc22ccb4e3a2c33883
?>