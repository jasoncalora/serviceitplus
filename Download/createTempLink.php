<?php
$email = $_POST["email"];
//echo $_POST["fileid"];
$d=strtotime("+3 hours");
//echo gmdate('r', time()) . "<br>";
//echo gmdate('r', time() + (3600*6));
$expiry = gmdate('r', time() + (3600*6));
$expiry = strtotime($expiry);
//echo date("Y-m-d h:i:sa", $d) . "<br>";
//echo date("Y-m-d h:i:sa");
$id = $_POST["fileid"];
$con = mysqli_connect('localhost','root','','serviceit_db');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con,"`dl_links`");
$sql="select * from dl_links where id='$id'";
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result)) {
    $id = $row['id'];
    $fname =  $row['filename'];
    $link =  $row['link'];
echo "<script>window.open('".$row['link'].$row['filename']."')</script>";
}
//sha1($str)
$code = sha1(time());
$sql="INSERT INTO `dl_temps`(`link_id`, `email`, `code`, `expiry`) VALUES ('$id','$email','$code','$expiry')";
mysqli_query($con,$sql);



/////////////////////////////       SEND EMAIL
include("../phpmailer/PHPMailerAutoload.php"); //Here magic Begen we include PHPMailer Library.
include("../phpmailer/class.phpmailer.php"); 
include('../phpmailer/class.smtp.php');
$name = "ServiceIt+"; 
//$email = $email; 
//$msg = ; 
$message = "Here is the Download Link for your Requested file <bold>$fname</bold>:<br><a href='http://localhost:8081/serviceitplus/download/startdownload.php?file=$code'>Dowload Here</a>".
    "<br><br>This Link will be available for the next 6 hours.";
$mail = new PHPMailer();
$mail->From = "support.serviceitplus.com";//$email1;
$mail->FromName = $name;
$mail->SMTPSecure = 'tls';
$mail->IsSMTP();
$mail->Host = 'smtp.gmail.com:587';
$mail->Username = "jason.calora@serviceitplus.com"; // your GMail user name
$mail->Password = "alphanumericP455W0RD"; 
$mail->AddAddress("$email"); // recipients email 
$mail->SMTPAuth = true;
$mail->isHTML(true);
$mail->From = $email;
$mail->FromName = $name;
$mail->Subject = "ServiceIT+, mApp download request";
$mail->Body = $message;
$mail->AddReplyTo($email, $name);
$mail->AltBody = "This is the plain text version of the email content";
if(!$mail->send()) 
{
    echo "Mailer Error: " . $mail->ErrorInfo;
} 
else 
{
    echo "Link Sent to your Email Address";
}


?>