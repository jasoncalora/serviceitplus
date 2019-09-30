<?php
if (strpos($_SERVER['PHP_SELF'], 'products') > 0) {
    $url = ".././/";
    $url2 = "http://".$_SERVER['HTTP_HOST'].str_replace("products/","",str_replace("index.php","",$_SERVER['PHP_SELF']));
}elseif (strpos($_SERVER['PHP_SELF'], 'solutionsandservices') > 0) {
    $url = ".././/";
    $url2 = "http://".$_SERVER['HTTP_HOST'].str_replace("solutionsandservices/","",str_replace("index.php","",$_SERVER['PHP_SELF']));
}elseif (strpos($_SERVER['PHP_SELF'], 'events') > 0) {
    $url = ".././/";
    $url2 = "http://".$_SERVER['HTTP_HOST'].str_replace("events/","",str_replace("index.php","",$_SERVER['PHP_SELF']));
}elseif (strpos($_SERVER['PHP_SELF'], 'itsm') > 0) {
    $url = ".././/";
    $url2 = "http://".$_SERVER['HTTP_HOST'].str_replace("itsm/","",str_replace("index.php","",$_SERVER['PHP_SELF']));
}elseif (strpos($_SERVER['PHP_SELF'], 'about') > 0) {
    $url = ".././/";
    $url2 = "http://".$_SERVER['HTTP_HOST'].str_replace("about/","",str_replace("index.php","",$_SERVER['PHP_SELF']));
}elseif (strpos($_SERVER['PHP_SELF'], 'careers') > 0) {
    $url = ".././/";
    $url2 = "http://".$_SERVER['HTTP_HOST'].str_replace("careers/","",str_replace("index.php","",$_SERVER['PHP_SELF']));
}elseif (strpos($_SERVER['PHP_SELF'], 'learning') > 0) {
    $url = ".././/";
    $url2 = "http://".$_SERVER['HTTP_HOST'].str_replace("learning/","",str_replace("index.php","",$_SERVER['PHP_SELF']));
}elseif (strpos($_SERVER['PHP_SELF'], 'governance') > 0) {
    $url = ".././/";
    $url2 = "http://".$_SERVER['HTTP_HOST'].str_replace("governance/","",str_replace("index.php","",$_SERVER['PHP_SELF']));
}elseif (strpos($_SERVER['PHP_SELF'], 'security') > 0) {
    $url = ".././/";
    $url2 = "http://".$_SERVER['HTTP_HOST'].str_replace("security/","",str_replace("index.php","",$_SERVER['PHP_SELF']));
}elseif (strpos($_SERVER['PHP_SELF'], 'assetmanagement') > 0) {
    $url = ".././/";
    $url2 = "http://".$_SERVER['HTTP_HOST'].str_replace("assetmanagement/","",str_replace("index.php","",$_SERVER['PHP_SELF']));
}elseif (strpos($_SERVER['PHP_SELF'], 'iam') > 0) {
    $url = ".././/";
    $url2 = "http://".$_SERVER['HTTP_HOST'].str_replace("iam/","",str_replace("index.php","",$_SERVER['PHP_SELF']));
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

<div class="footer noselect">
    <div class="footer-top">
        <!--
        <div class="top-left">
           <div class="top-left-logo"><img src="../images/header/SITlogo.png" alt=""></div>
           <div class="top-left-caption">Driving Service Excellence</div>            
        </div>
-->
        <div class="top-container">
            <div class="contact-container">
                <img src="<?php echo $url ?>images/header/location.svg" alt="">
                <div>Suite 604 VGP Center, 6772 Ayala Avenue <br> Makati City, Philippines 1226
                </div>
            </div>
            <div class="contact-container">
                <img src="<?php echo $url ?>images/header/phone.svg" alt="">
                <div>+632 949 8109 / +632 949 8108</div>
            </div>
            <div class="contact-container left">
                <img src="<?php echo $url ?>images/header/mail.svg" alt="">
                <div>inquiries@serviceitplus.com</div>
            </div>
            <div class="contact-container">
                <img src="<?php echo $url ?>images/header/fax.svg" alt="">
                <div>+632 621 6323</div>
            </div>
            <div class="contact-container2">
                <a href="https://www.facebook.com/ServiceITplus" target="_blank"><img src="<?php echo $url ?>images/header/fb.svg" alt=""></a>
                <a href="https://twitter.com/ServiceITInc" target="_blank"><img src="<?php echo $url ?>images/header/twitter.svg" alt=""></a>
                <a href="https://www.linkedin.com/company/1482360/" target="_blank"><img src="<?php echo $url ?>images/header/linkedin.svg" alt=""></a>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="wrapp">
            <!--            <div class="cont">-->
            <div><a href="#" onclick="preview();">Privacy Statement</a></div>
            <div>|</div>
            <div>Copyright&nbsp; <i class="fa fa-copyright" aria-hidden="true"></i> &nbsp; 2019 ServiceIT+ Inc.</div>
            <!--            </div>-->
        </div>
    </div>
</div>



<!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">-->
<div id="preview-modal" onClick="closePreview(this)">    
    <div class="modal-exit">
        <i class="fas fa-times"></i>
    </div>
    <div class="modal-dload">
        <a href="<?php echo $url ?>/about/ServiceIT+%20Privacy%20Policy%20(February%202019).pdf" download><i class="fas fa-file-download"></i></a>
    </div>
    <div id="preview-container">

    </div>
</div>
<script>
        var $html    = $('html');
    function preview() {
        ///////////     SHOW MODAL
        document.getElementById("preview-modal").setAttribute("style", "display:flex;");
//        document.getElementsByTagName("body").setAttribute("style", "overflow:hidden;");
        document.getElementById("preview-container").innerHTML = '<div class="moda-dload2"><a href="<?php echo $url ?>/about/ServiceIT+%20Privacy%20Policy%20(February%202019).pdf" download><i class="fas fa-file-download"></i>&nbsp; Download here</a></div><iframe src="https://drive.google.com/file/d/1kg86N9Tz9DMk3KBBn6ciPNwKxg6u3zJ3/preview" width="100%" height="100%"></iframe>';
//        document.getElementById("preview-container").innerHTML = "adasdasdasd";
        $html.css('overflow-y', 'hidden');
    }

    function closePreview(x) {
        x.setAttribute('style', 'display:none;');
//        document.getElementsByTagName('body').setAttribute('style', 'overflow:visible;');
        $html.css('overflow-y', 'scroll');
        document.getElementById("preview-container").innerHTML = '';
        deleteFile();
    }
</script>
<style>
    .modal-exit{
        opacity:0;
        z-index:99999999;
        position:absolute;
        height:40px;
        width:40px;
        top:50px;
        left:3.3%;
        font-size:20px;
        display:flex;
        justify-content:center;
        align-items:center;
        color:black;
        background-color:rgba( 40, 40, 40, 0.791 );
/*        border-radius:100%;*/
        color:white;
    }
    .modal-dload a{
        text-decoration:none;
        color:white;
    }
    .modal-dload{
        opacity:0;
        z-index:99999999;
        position:absolute;
        height:40px;
        width:40px;
        top:10px;
        left:3.3%;
        font-size:20px;
        display:flex;
        justify-content:center;
        align-items:center;
        color:black;
        background-color:rgba( 40, 40, 40, 0.791 );
/*        border-radius:100%;*/
        color:white;
    }
    .moda-dload2{
        z-index:99999999;
/*        border:1px solid red;/*/
        position:absolute;
        padding:8px;
        top:10px;
        left:3.3%;
        font-size:1rem;
        display:flex;
        justify-content:center;
        align-items:center;
        color:black;
        background-color:rgba( 76, 76, 76, 0.842 );
        border-radius:5px;
    }
    .moda-dload2 a{
        text-decoration: none;
        font-weight:100;
        color:white;
    }
    .modal-dload:hover{
        background-color:rgba( 73, 73, 73, 0.791 );
        cursor:pointer;
    }
    .modal-exit:hover{
        background-color:rgba( 73, 73, 73, 0.791 );
        cursor:pointer;
    }
    #preview-modal {
        height: 100%;
        width: 100%;
        background-color: rgba(0, 0, 0, 0.825);
        position: fixed;
        top: 0px;
        z-index: 999;
        display: none;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
    }


    #preview-container {
        width: 65%;
        height: 100%;
/*        border: 1px solid white;*/
        background-color: rgba(255, 255, 255, 0.717);
    }
    @media (min-width: 200px) and (max-width:767px) {
        .modal-exit{
            opacity:1;
        }
        .modal-dload{
            opacity:1;
        }
        #preview-container {
            width: 100%;
            height: 100%;
/*            border: 1px solid white;*/
            background-color: rgba(255, 255, 255, 0.717);
        }
        .moda-dload2{
        opacity:0;
        }
    }
    @media (min-width: 768px) and (max-width:1400px) {
        .moda-dload2{
        left:20%;
        }
    }
</style>