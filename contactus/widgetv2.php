<?php
    //    $url="/Website2017v2/";
    if (strpos($_SERVER['PHP_SELF'], 'products') > 0) {
        $url = ".././/";
        $url2 = "http://".$_SERVER['HTTP_HOST'].str_replace("products/","",str_replace("index.php","",$_SERVER['PHP_SELF']));
    }elseif (strpos($_SERVER['PHP_SELF'], 'events') > 0) {
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
    }else {
        $url = ".//";
        $url2 = "http://".$_SERVER['HTTP_HOST'].str_replace("index.php","",$_SERVER['PHP_SELF']);
    }
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

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
});
    
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
    var url = "<?php echo $url2."contactus/sendmail.php"; ?>";
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
    document.getElementById("contact-form").innerHTML = "<div class='greeting'>Hi! We'd love to hear from you!</div>" +
        "<form onsubmit='sendMail()' id='messageform'>" +
        "<input type='text' id='text-name' autocomplete='off' placeholder='Name' required>" +
        "<input type='email' id='text-email' autocomplete='off' placeholder='Email Address' requried>" +
        "<textarea rows='4' id='text-message' placeholder='Message'></textarea>" +
        "<button type='submit' id='send' class='widget-button'>Send &nbsp;<i class='fas fa-paper-plane'></i></button>" +
        "</form>";
}
</script>
<style>
    .chat-container{
        border-top:1px solid rgba( 204, 204, 204, 0.642 );
        border-left:1px solid rgba( 204, 204, 204, 0.642 );
        border-right:1px solid rgba( 204, 204, 204, 0.642 );
        width:290px;
        position:fixed;
        bottom:0px;
        right:5%;
        z-index:998;
        border-top-left-radius: 7px;
        border-top-right-radius: 7px;
/*        box-shadow: 2px 2px rgba( 221, 221, 221, 0.769 );*/
    }
    .contact-title{
        width:100%;
        background-color:#f16a21;
        color:white;
        display:flex;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
    }
    .contact-title:hover{
        cursor:pointer;
    }
    .display-caption{
/*        border:1px solid black;*/
        padding-top:0.5rem;
        padding-bottom:0.5rem;
        padding-left:1.2rem;
        width:85%;
/*        font-weight:600;*/
        font-size:0.9rem;
        float:left;
    }
    .disp-icon{
/*        border:1px solid black;*/
        padding-top:0.5rem;
        padding-bottom:0.5rem;
        width:15%;
/*        text-align:center;*/
        font-size:1rem;
        float:right;
        display:flex;
        justify-content: center;
        align-items:center;
    }
    .disp-icon:hover{
        background-color:rgba( 248, 210, 179, 0.192 );
        cursor:pointer;
    }
    .contact-form{
        display:none;
/*        border:1px solid black;*/
        background-color:white;
        padding-top:0.5rem;
        padding-bottom:1.2rem;
        text-align:center;
        height:18rem;
    }
    .contact-form .greeting{
/*        border:1px solid black;*/
        text-align: left;
        font-size:0.9rem;
        padding-left:5%;
        padding-top:0.5rem;
        padding-right:1rem;
        padding-bottom:1.2rem;
    }
    .contact-form input{
        width:90%;
/*        margin-left:5%;*/
        font-size:0.8rem;
        padding-top:0.3rem;
        padding-bottom:0.3rem;
        padding-left:0.3rem;
        border-left:1.5px solid #f16a21;
        margin-bottom:0.5rem;
    }
    .contact-form textarea{
        width:90%;
/*        margin-left:1rem;*/
        font-size:0.8rem;
/*        margin-top:0.5rem;*/
        padding-top:0.3rem;
        padding-bottom:0.3rem;
        padding-left:0.3rem;
        border-left:1.5px solid #f16a21;
        resize: none;
    }
    input:focus, textarea:focus {
        outline: 0;
        -moz-box-shadow:    inset 0 0 2px #000000;
       -webkit-box-shadow: inset 0 0 2px #000000;
       box-shadow:         inset 0 0 2px #000000;
    }
    .widget-button{
        font-size:1rem;
        margin-top:1rem;
        width:70%;
        padding-top:0.2rem;
        padding-bottom:0.2rem;
        padding-left:1rem;
        padding-right:1rem;
        background-color:#2559d4;
        color:white;
        border-radius:10px;
    }
    #send i{
        font-size:0.9rem;
    }
    button:focus{        
        outline: 0;
    }
</style>

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
