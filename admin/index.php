<?php
session_Start();
if(!isset($_Session['username'])){
    header("Location:login.php");
    die();
}
?>