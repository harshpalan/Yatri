<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;



require ('firstimport.php');
if(isset($_POST['button_pressed']))
    $tbl_name = "booking";
    $tbl2 ="users";
    mysqli_select_db($conn,"$db_name") or die("cannot select db");
    $uname = $_SESSION['name'];

    $sql = "SELECT * FROM $tbl_name WHERE uname='".$uname."'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);
    $from = $row['fromstn']; 
    $to = $row['tostn'];
    $doj = $row['doj'];
    $status = $row['status'];

    $sql2 = "SELECT * FROM $tbl2 WHERE uname='".$uname."'";
    $result2 = mysqli_query($conn,$sql2);
    $row = mysqli_fetch_array($result2);
    $email = $row['email'];
    $fname = $row['f_name'];

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
    $mail->Password = 'r@ilyatr!123';
    $mail->setFrom("help.yatri@gmail.com","Yatri");
    $mail->Subject = "Your booking with yatri";
    //$email = $_POST["MailKeLiye"];
    //$sql100 = "SELECT FirstName FROM user WHERE Email='".$email."'";
    //$res = mysqli_query($conn,$sql100);                                
    //$fname = mysqli_fetch_assoc($res);
    //$namee = $fname["FirstName"];
    $mail->Body = "Dear ".$fname.",<br> Congratulations! Your trip booking with Yatri to ".$to." from ".$from." station has been succesfully booked.The date of journey is ".$doj." and has ".$status." status currently.<br>Please be updated for further details.<br>-Best Regards,<br> <i>Team Yatri</i>";
     //add user email here

    $mail->AddAddress($email); // Add recipients

     if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
     } else {
        echo "Message has been sent";
        header("location:display.php");
     }
?>