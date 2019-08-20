<?php

//require_once "phpmailer/PHPMailerAutoload.php";
include("../phpmailer/PHPMailerAutoload.php"); //Here magic Begen we include PHPMailer Library.
include("../phpmailer/class.phpmailer.php"); 
include('../phpmailer/class.smtp.php');
//$name = "Jason Calora"; 
//$email = "jason.calora@serviceitplus.com"; 
//$msg = "asdasdasd asd as das dasd asd asdasdasd asdadas"; 
$name = $_POST['name']; 
$email = $_POST['email']; 
$msg = $_POST['message']; 
$message = "Name : ".$name."<br>Email : ".$email."<br>Message : ".$msg;
//echo $message;
//PHPMailer Object
$mail = new PHPMailer();

//From email address and name
$mail->From = $email;//$email1;
$mail->FromName = $name;

//To address and name
//$mail->addAddress("jd.calora@hotmail.com", "Recepient Name");
//$mail->addAddress("jd.calora@hotmail.com"); //Recipient name is option
//Address to which recipient will reply
//$mail->addReplyTo("jd.calora@hotmail.com", "Reply");

//CC and BCC
//$mail->addCC("jd.calora@gmail.com");
//$mail->addBCC("bcc@example.com");

//$mail = new PHPMailer();
//$mail->SMTPSecure = 'ssl';
$mail->IsSMTP();
//$mail->Host = 'xo7.x10hosting.com:21';
$mail->Host = 'just56.justhost.com:26';
//$mail->Port = 465;
$mail->Username = "livechat@serviceitplus.com"; // your GMail user name
$mail->Password = "TdU]=7N,sL$.X"; 
$mail->AddAddress("jason.calora@serviceitplus.com"); // recipients email 
$mail->SMTPAuth = true;
//$mail->FromName = "username";
//Send HTML or Plain Text email
$mail->isHTML(true);
$mail->From = $email;
$mail->FromName = $name;
$mail->Subject = "Website Message/Inquiry";
$mail->Body = $message;
$mail->AddReplyTo($email, $name);
$mail->AltBody = "This is the plain text version of the email content";
//$mail->AddAttachment('try.html');
//$mail->addAttachment($_FILES['resume']['tmp_name'],$_FILES['resume']['name']);
//$mail->AddAttachment($_FILES['resume']);
if(!$mail->send()) 
{
    echo "Mailer Error: " . $mail->ErrorInfo;
} 
else 
{
    echo "Message sent successfully";
//    session_start();
//    $_SESSION["status"] = "success";
//    $_SESSION["job"] = $pos;
//    header("Location:./careers/");
}