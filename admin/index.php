<?php
session_Start();
if(!isset($_SESSION["username"])){
    header("Location:login.html");
    die();
//    echo $_SESSION["username"];
}
echo "welocome!".$_SESSION["username"];

?>
<a href="logout.php">Logout</a>