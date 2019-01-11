<?php
/*
Template Name: JobManagement
*/
session_start();
//// remove all session variables
//session_unset(); 
//
//// destroy the session 
//session_destroy(); 
//echo $_SESSION['sessionOwner'];
if ($_SESSION['sessionOwner'] == '')
{
    header('Location: http://desktop-5ctqqt6:8081/serviceitplus/events/login/');
}
?>
<html>
    <head>
        
    </head>
<body>
    <H1>Welcome <?php echo $_SESSION['sessionOwner']; ?></H1>
</body>
</html>
