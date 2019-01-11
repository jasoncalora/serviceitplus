<?php
/*
Template Name: JobManagement
*/
session_start();
//echo $_SESSION['sessionOwner'];
if ($_SESSION['sessionOwner'] == '')
{
    header('Location: http://desktop-5ctqqt6:8081/serviceitplus/events/login/');
}
?>
asdasd
