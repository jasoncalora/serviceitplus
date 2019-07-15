<?php
session_Start();
if(!isset($_SESSION["username"])){
    header("Location:login.html");
    die();
//    echo $_SESSION["username"];
}
//echo "welocome!".$_SESSION["username"];

?>
<!--<a href="logout.php">Logout</a>-->
<html>
<head>
    <title>Admin Page</title>
    <?php echo "<style>"; include "../css/admin-home.css"; echo "</style>";?>
    <?php echo "<style>"; include "../css/font-awesome5.7.2.min.css"; echo "</style>";?>
    <?php echo "<style>"; include "../css/bootstrap4.3.1.min.css"; echo "</style>";?>
    <?php echo "<script>"; include "../js/jquery-3.3.1.slim.min.js"; echo "</script>";?>
    <?php echo "<script>"; include "../js/popper1.14.3.min.js"; echo "</script>";?>
    <?php echo "<script>"; include "../js/bootstrap4.1.3.min.js"; echo "</script>";?>
</head>
<script>
    function fileUploads(){
        var http = new XMLHttpRequest();
        var url = "FileDownloads.php";
//        var url = "inc/preview.php";
        http.open('POST', url, true);
        //Send the proper header information along with the request
        http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

        http.onreadystatechange = function() {//Call a function when the state changes.
            if(http.readyState == 4 && http.status == 200) {
                document.getElementById("content-container").innerHTML = http.responseText;
            }
        }
        http.send();
//        alert("test");
    }
</script>
<body>
    <div class="html-wrapper">
        <div class="sidebar">
            <div class="company-logo"><img src="../images/header/SITlogo.png" alt=""></div>
            <div class="user-div">
                <div class="user-icon"><i class="fas fa-user"></i></div>
                <div class="user-welcome"><?php echo "Welcome! ".$_SESSION["username"]; ?></div>
            </div>
            <div class="menu">
                <div class="menu-item"><div class="text">Users</div></div>
                <div class="menu-item"><div class="text">Careers</div></div>
                <div class="menu-item" onclick="fileUploads()"><div class="text">File Uploads</div></div>
                <div class="menu-item" onclick=""><a href="logout.php"><div class="text">Logout</div></a></div>
            </div>
        </div>
        <div class="dash-container" id="content-container"></div>
    </div>
</body>
</html>