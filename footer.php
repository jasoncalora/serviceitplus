<?php
    if (strpos($_SERVER['PHP_SELF'], 'products') > 0) {
        $url = ".././/";
    }elseif (strpos($_SERVER['PHP_SELF'], 'about') > 0) {
        $url = ".././/";
        $url2 = "http://".$_SERVER['HTTP_HOST'].str_replace("about/","",str_replace("index.php","",$_SERVER['PHP_SELF']));
    }else {
        $url = ".//";
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
                    <div>Suite 604 VGP Center, 6772 Ayala Avenue  <br> Makati City, Philippines 1226
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
            Copyright&nbsp; <i class="fa fa-copyright" aria-hidden="true"></i> &nbsp; 2017 ServiceIT+ Inc.  
    </div>
</div>