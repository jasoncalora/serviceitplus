<?php

//require_once "phpmailer/PHPMailerAutoload.php";
include("../phpmailer/PHPMailerAutoload.php"); //Here magic Begen we include PHPMailer Library.
include("../phpmailer/class.phpmailer.php"); 
include('../phpmailer/class.smtp.php');
$fname = $_POST['fname']; 
$lname = $_POST['lname']; 
$company = $_POST['company']; 
$email = $_POST['email']; 
$contact = $_POST['contact']; 
$message = "Name : ".$fname." ".$lname."<br>Company : ".$company."<br>Email : ".$email."<br>Contact No. :".$contact."<br>Page Source : IT Governance";
//echo $message;
//PHPMailer Object
$mail = new PHPMailer();

//From email address and name
$mail->From = $email;//$email1;
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
//$mail->SMTPSecure = 'tls';
$mail->IsSMTP();
//$mail->Host = 'xo7.x10hosting.com:21';
//$mail->Host = 'smtp.gmail.com:587';
////$mail->Port = 465;
//$mail->Username = "jason.calora@serviceitplus.com"; // your GMail user name
//$mail->Password = "alphanumericP455W0RD"; 
//$mail->AddAddress("jason.calora@serviceitplus.com"); // recipients email 
$mail->Host = 'just56.justhost.com:26';
$mail->Username = "livechat@serviceitplus.com"; // your GMail user name
$mail->Password = "TdU]=7N,sL$.X"; 
$mail->AddAddress("inquiry@serviceitplus.com"); // recipients email 
$mail->SMTPAuth = true;
//$mail->FromName = "username";
//Send HTML or Plain Text email
$mail->isHTML(true);
$mail->From = $email;
$mail->FromName = $fname." ".$lname;
$mail->Subject = "Website Inquiry";
$mail->Body = $message;
$mail->AltBody = "This is the plain text version of the email content";
//$mail->AddAttachment('try.html');
//$mail->addAttachment($_FILES['resume']['tmp_name'],$_FILES['resume']['name']);
//$mail->AddAttachment($_FILES['resume']);
//$mail->addAttachment($_FILES['file-1']['tmp_name'],$_FILES['file-1']['name']);
if(!$mail->send()) 
{
    echo "Mailer Error: " . $mail->ErrorInfo;
} 
else 
{
    echo "We will get in touch with you soon.";
//    session_start();
//    $_SESSION["status"] = "success";
//    $_SESSION["job"] = $pos;
//    header("Location:./careers/");
}