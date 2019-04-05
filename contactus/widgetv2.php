<?php
if (strpos($_SERVER['PHP_SELF'], 'products') > 0) {
    $url = ".././/";
    $url2 = "http://".$_SERVER['HTTP_HOST'].str_replace("products/","",str_replace("index.php","",$_SERVER['PHP_SELF']));
}
elseif (strpos($_SERVER['PHP_SELF'], 'events') > 0) {
    $url = ".././/";
    $url2 = "http://".$_SERVER['HTTP_HOST'].str_replace("events/","",str_replace("index.php","",$_SERVER['PHP_SELF']));
}elseif (strpos($_SERVER['PHP_SELF'], 'about') > 0) {
    $url = ".././/";
    $url2 = "http://".$_SERVER['HTTP_HOST'].str_replace("about/","",str_replace("index.php","",$_SERVER['PHP_SELF']));
}elseif (strpos($_SERVER['PHP_SELF'], 'careers') > 0) {
    $url = ".././/";
    $url2 = "http://".$_SERVER['HTTP_HOST'].str_replace("careers/","",str_replace("index.php","",$_SERVER['PHP_SELF']));
}elseif (strpos($_SERVER['PHP_SELF'], 'learning') > 0) {
    $url = ".././/";
    $url2 = "http://".$_SERVER['HTTP_HOST'].str_replace("learning/","",str_replace("index.php","",$_SERVER['PHP_SELF']));
}elseif (strpos($_SERVER['PHP_SELF'], 'services') > 0) {
    $url = ".././/";
    $url2 = "http://".$_SERVER['HTTP_HOST'].str_replace("services/","",str_replace("index.php","",$_SERVER['PHP_SELF']));
    $url2 = str_replace("product-services.php","",$url2);
    $url2 = str_replace("product-consulting.php","",$url2);
    $url2 = str_replace("Managed-Services.php","",$url2);
//    $url2 = $url2.str_replace("services/","",str_replace("product-services.php","",$url2));
//    $url2 = "http://".$_SERVER['HTTP_HOST'].str_replace("services/","",str_replace("index.php","",$_SERVER['PHP_SELF']));
}else {
    $url = ".//";
    $url2 = "http://".$_SERVER['HTTP_HOST'].str_replace("index.php","",$_SERVER['PHP_SELF']);
}
?>
<?php //echo "<script>"; include "../js/jquery3.3.1.min.js"; echo "</script>";?>
<?php echo "<style>"; include "../css/fontawesome-all.css"; echo "</style>";?>

<!--
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
-->

<script>
$(document).ready(function(){
    $(".contact-title").click(function(){
        $(".contact-form").slideToggle();
        if ($("#disp-icon").html().indexOf('<i class="fas fa-chevron-up"></i>') > -1){
            $("#disp-icon").html('<i class="fas fa-chevron-down"></i>');
        } else {
        $("#disp-icon").html('<i class="fas fa-chevron-up"></i>');
        }
    });
    $(".floating-icon").click(function(){
//        $(".chat-container").fadeToggle();
        $(".contact-form").fadeToggle();
    });
    setTimeout(function() {
        $(".contact-form").slideDown();
        if ($("#disp-icon").html().indexOf('<i class="fas fa-chevron-up"></i>') > -1){
            $("#disp-icon").html('<i class="fas fa-chevron-down"></i>');
        } else {
            $("#disp-icon").html('<i class="fas fa-chevron-up"></i>');
        }
    }, 15000);
    
//    $(".msg-exit").click(function(){
//        $(".chat-container").fadeToggle();
//        $(".contact-form").fadeToggle();
//    });
});
function autoopen(){
    $(".contact-form").slideToggle();
        if ($("#disp-icon").html().indexOf('<i class="fas fa-chevron-up"></i>') > -1){
            $("#disp-icon").html('<i class="fas fa-chevron-down"></i>');
        } else {
        $("#disp-icon").html('<i class="fas fa-chevron-up"></i>');
        }
}
function test(){    
//        $(".chat-container").fadeToggle();
        $(".contact-form").fadeToggle();
}
function sendMail(){
//    alert("asdasd");
    var params = "";
    params += "name="+document.getElementById("text-name").value;
    params += "&email="+document.getElementById("text-email").value;
    params += "&message="+document.getElementById("text-message").value;
    document.getElementById("contact-form").innerHTML = "<div style='height:100%;width:100%;display:flex;justify-content:center;align-items:center;'>" +
        "<i class='fas fa-spinner fa-spin' style='color:#f16a21;font-size:3rem;padding-top:3rem;padding-bottom:3rem;'></i>"+
        "</div>";
    var http = new XMLHttpRequest();
    var url = "<?php echo "../contactus/sendmail2.php"; ?>";
    // var url = "inc/preview.php";
    http.open('POST', url, true);
    //Send the proper header information along with the request
    http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    http.onreadystatechange = function() {//Call a function when the state changes.
        if(http.readyState == 4 && http.status == 200) {
//             document.getElementById("contact-form").innerHTML = http.responseText;
            document.getElementById("contact-form").innerHTML = "<div style='font-size:1rem;display:flex;flex-wrap:wrap;height:100%;width:100%;padding-right:1rem;padding-left:1rem;padding-top:1rem;'>" + 
                "<div style='width:100%;display:flex;text-align:justify;'><i style='color:#f16a21; margin-right:0.5rem;' class='fas fa-envelope-open'></i>" + http.responseText + 
                "</div><div style='width:100%;text-align:center;'><button onclick='defaultForm()' class='widget-button' style='width:60%;'>Back</button></div>" +
                "</div>";
            // alert(http.responseText);
        }
    }
    http.send(params);
}
function defaultForm(){
    document.getElementById("contact-form").innerHTML = "<div class='msg-exit'><i class='fas fa-times-circle' onclick='test()'></i></div>" +
        "<div class='greeting'>Hi! We'd love to hear from you!</div>" +
        "<form onsubmit='sendMail()' id='messageform'>" +
        "<input type='text' id='text-name' autocomplete='off' placeholder='Name' required>" +
        "<input type='email' id='text-email' autocomplete='off' placeholder='Email Address' requried>" +
        "<textarea rows='4' id='text-message' placeholder='Message'></textarea>" +
        "<button type='submit' id='send' class='widget-button'>Send &nbsp;<i class='fas fa-paper-plane'></i></button>" +
        "</form>";
}
</script>
<?php echo "<style>"; include "../css/widget.css"; echo "</style>";?>

<div class="floating-icon" id="floating-icon">
    <i class="fas fa-envelope"></i>
</div>
<div class="chat-container">
<!--
  <button class="btn1">Slide up</button>
<button class="btn2">Slide down</button>
-->
<div class="contact-title">
   <div class="display-caption">Contact Us</div>
    <div class="disp-icon" id="disp-icon"><i class="fas fa-chevron-up"></i></div>
</div>
<div class="contact-form" id="contact-form">
   <div class="msg-exit"><i class="fas fa-times" onclick="test()"></i></div>
    <div class="greeting">Hi! We'd love to hear from you!</div>
    <form onsubmit="sendMail()" id="messageform">
        <input type="text" id="text-name" autocomplete="off" placeholder="Name" required>
        <input type="email" id="text-email" autocomplete="off" placeholder="Email Address" requried>
        <textarea rows="3" id="text-message" placeholder="Message"></textarea>
        <button type="submit" id="send" class="widget-button">Send &nbsp;<i class="fas fa-paper-plane"></i></button>
<!--    <button id="send" form="messageform" type="submit" onclick="sendMail()">Send &nbsp;<i class="fas fa-paper-plane"></i></button>-->
    </form>
</div>
</div>
