<?php

//require_once "phpmailer/PHPMailerAutoload.php";
include("phpmailer/PHPMailerAutoload.php"); //Here magic Begen we include PHPMailer Library.
include("phpmailer/class.phpmailer.php"); 
include('phpmailer/class.smtp.php');
$pos = $_POST['txtPosition']; 
$fname = $_POST['firstName']; 
$lname = $_POST['lastName']; 
$email1 = $_POST['emailAdd']; 
$phone1 = $_POST['contactNo']; 
$message = "Position : ".$pos."<br>Name : ".$fname." ".$lname."<br>Email : ".$email1."<br>Contact No. :".$phone1;
echo $message;
//PHPMailer Object
$mail = new PHPMailer;

//From email address and name
$mail->From = $email1;//$email1;
$mail->FromName = $fname." ".$lname;

//To address and name
//$mail->addAddress("jd.calora@hotmail.com", "Recepient Name");
//$mail->addAddress("jd.calora@hotmail.com"); //Recipient name is option
//Address to which recipient will reply
//$mail->addReplyTo("jd.calora@hotmail.com", "Reply");

//CC and BCC
//$mail->addCC("jd.calora@gmail.com");
//$mail->addBCC("bcc@example.com");

//$mail = new PHPMailer();
$mail->SMTPSecure = 'ssl';
$mail->IsSMTP();
//$mail->Host = 'xo7.x10hosting.com:21';
$mail->Host = 'mail.sitlivechat.x10host.com:465';
//$mail->Port = 465;
$mail->Username = "sitlivechat@sitlivechat.x10host.com"; // your GMail user name
$mail->Password = "passwordkoto"; 
$mail->AddAddress("jason.calora@serviceitplus.com"); // recipients email 
//$mail->FromName = "username";
//Send HTML or Plain Text email
$mail->isHTML(true);
$mail->From = $email1;
$mail->FromName = $fname." ".$lname;
$mail->Subject = "Job Application";
$mail->Body = $message;
$mail->AltBody = "This is the plain text version of the email content";
//$mail->AddAttachment('try.html');
//$mail->addAttachment($_FILES['resume']['tmp_name'],$_FILES['resume']['name']);
//$mail->AddAttachment($_FILES['resume']);
$mail->addAttachment($_FILES['file-1']['tmp_name'],$_FILES['file-1']['name']);
if(!$mail->send()) 
{
    echo "Mailer Error: " . $mail->ErrorInfo;
} 
else 
{
    echo "Message has been sent successfully";
    session_start();
    $_SESSION["status"] = "success";
    $_SESSION["job"] = $pos;
    header("Location: http://sitlivechat.x10host.com/betacareer/careers/");
}