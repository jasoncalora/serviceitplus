<?php
session_start();
$_SESSION["status"] = "success";
$_SESSION["job"] = "Janitor";
 header("Location: http://localhost/website/careers/");
?>