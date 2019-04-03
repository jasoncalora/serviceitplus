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
    
//    $(".msg-exit").click(function(){
//        $(".chat-container").fadeToggle();
//        $(".contact-form").fadeToggle();
//    });
});
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
    document.getElementById("contact-form").innerHTML = "<div class='msg-exit'><i class='fas fa-times-circle' onclick='test()'></i></div>" +
        "<div class='greeting'>Hi! We'd love to hear from you!</div>" +
        "<form onsubmit='sendMail()' id='messageform'>" +
        "<input type='text' id='text-name' autocomplete='off' placeholder='Name' required>" +
        "<input type='email' id='text-email' autocomplete='off' placeholder='Email Address' requried>" +
        "<textarea rows='4' id='text-message' placeholder='Message'></textarea>" +
        "<button type='submit' id='send' class='widget-button'>Send &nbsp;<i class='fas fa-paper-plane'></i></button>" +
        "</form>";
}