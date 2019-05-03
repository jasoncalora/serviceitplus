<?php
$uname = $_POST["user"];
$pass = $_POST["pwd"];
$con = mysqli_connect('localhost','root','','serviceit_db');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con,"`accounts`");
$sql="select * from accounts where account_name='$uname' and account_password='$pass' ";
$result = mysqli_query($con,$sql);
$login = mysqli_num_rows($result);
echo $login;
if($login == 1){
    while($row = mysqli_fetch_array($result)) {
        session_start();
        $_SESSION["username"] = $row['account_name'];
    }
}

mysqli_close($con);
?>