<?php
   session_start();
   unset($_SESSION['sessionOwner']);
   
   echo 'You have cleaned session';
//   header('Refresh: 2; URL = login.php');
   header("Location: http://desktop-5ctqqt6:8081/serviceitplus/events/careersmgt/");
?>