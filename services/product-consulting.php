<!DOCTYPE html>
<html lang="en">

<head>
    <title>Consulting Services | Service IT+</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <!--    <meta name="viewport" content="width=device-width, initial-scale=1">-->
    <meta name="author" content="SemiColonWeb" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="../images/header/favicons.png">

    <!-- bootstrap & jquery css & js  -->
<!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->
<!--    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
<!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>-->
<!--    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>-->

    <!-- header css & js  -->
<!--    <script type="text/javascript" src="../js/header2.js"></script>-->
<!--    <link rel="stylesheet" href="../css/header.css" type="text/css" />-->
    <!--	<link rel="stylesheet" href="../css/services.css" type="text/css" />-->
<!--    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">-->

<!--    <link rel="stylesheet" href="../css/aos.css">-->
    <!--    <script type="text/javascript" src="//www.serviceitplus.com/livechat2/php/app.php?widget-init.js"></script>-->
</head>
<?php //include "bs-fa.html" ?>

<style>/* raleway font css */
 @font-face{font-family:Raleway;font-display:auto;font-style:normal;font-weight:400;src:local('Raleway'),local('Raleway-Regular'),url(fonts/raleway.woff2) format('woff2');unicode-range:U+0100-024F,U+0259,U+1E00-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:Raleway;font-style:normal;font-weight:400;src:local('Raleway'),local('Raleway-Regular'),url(fonts/raleway.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}
</style>
<?php echo "<style>"; include "../css/bootstrap4.3.1.min.css"; echo "</style>";?>
<?php echo "<script>"; include "../js/jquery-3.3.1.slim.min.js"; echo "</script>";?>
<?php echo "<script>"; include "../js/popper1.14.7.min.js"; echo "</script>";?>
<?php echo "<script>"; include "../js/bootstrap4.3.1.min.js"; echo "</script>";?>
<?php echo "<script>"; include "../js/header2.js"; echo "</script>";?>
<?php echo "<style>"; include "../css/header.css"; echo "</style>";?>
<?php echo "<style>"; include "../css/font-awesome5.7.2.min.css"; echo "</style>";?>
<?php echo "<style>"; include "../css/aos.css"; echo "</style>";?>
<style>
    body {
        font-family: 'Raleway', sans-serif;
        font-size: 0.01rem;
        /*        background:url(../images/services/productbg.png);*/
    }

    body,
    html {
        height: 100%;
        /*    overflow-x: hidden;*/
    }
    .header{
        background-color:rgba( 25, 25, 122, 0.242 );
    }
    .body-container {
/*        border:4px solid red;*/
        display: flex;
        flex-wrap: wrap;
    }

    .banner-text {
        /*        border:1px solid black;/*/
        padding-left: 2%;
        width: 100%;
    }

    .banner-div-container {
        height: 100%;
        width: 100;
        font-size: 3.5rem;
        font-weight: 800;
        text-shadow: 1px 4px #000000;
        color: white;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }

    .footer {
        /*        margin-top:2rem;*/
    }

    .banner-title i {
        font-size: 1.5rem;
    }

    .banner-title {
        /*        border:1px solid black;*/
        width: 100%;
        padding-left: 5%;
        font-size: 2rem;
        font-weight: 500;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }

    .banner-tagline {
        width: 45%;
        font-weight: 100;
        font-size: 1.2rem;
        padding-left: 8%;
    }

    .banner-div {
        /*    border:1px solid red;*/
        float: left;
        width: 100%;
        height: 70%;
/*        background: url(../images/services/img8.svg);*/
        background: url(../images/services/banner2.1.svg);
        background-size:cover;
        background-repeat: no-repeat;
/*        border:5px solid black;*/
    }
    .block1{
/*        border:5px solid black;*/
        width:100%;
        font-size:1.2rem;
        padding-left:5%;
        padding-right:5%;
        padding-top:3rem;
        padding-bottom:3rem;
        text-align: justify;
        background-color:#f9f9f9;
/*        height:300px;*/
    }
    .block1 .title{
        font-size:2rem;
        text-align: center;
        font-weight: 600;
/*        padding-top:1rem;*/
        padding-bottom:1rem;
    }
    .block2{
/*        border:3px solid red;*/
        width:100%;
        height:400px;
        display:flex;
        align-items:center;
        padding-right:5%;
    }
    .block2 .left{
/*        border:2px solid black;*/
        width:40%;
        height:100%;
/*        text-align:center;*/
        display:flex;
/*
        display:flex;
        flex-wrap:wrap;
        justify-content: center;
*/
    }
    .block2 .left img{
/*        border:1px solid black;*/
        width:100%;
        padding-top:2rem;
        padding-bottom:2rem;
    }
    .block2 .right{
/*        border:2px solid blue;*/
        width:60%;
/*
        padding-top:2rem;
        padding-bottom:2rem;
*/
    }
    .block2 .right .title{
/*        border:2px solid blue;*/
        font-size:2rem;
/*        font-weight: 600;*/
    }
    .block2 .right .desc{
/*        border:2px solid blue;*/
        font-size:1.2rem;
    }
    .block2 .right .desc .list{
/*        border:2px solid blue;*/
        width:100%;
        display:flex;
        flex-wrap:wrap;
        padding-top:1rem;
        padding-left:5%;
    }
    .block2 .right .desc .bulleticon{
/*        border:2px solid red;*/
/*        width:2rem;*/
        width:10%;
        text-align: center;
        color:green;
    }
    .block2 .right .desc .bulletdesc{        
/*        border:2px solid black;*/
        width:90%;
        padding-right:10%;
    }
    
    .block3{
/*        border:3px solid red;*/
        width:100%;
        height:300px;
        display:flex;
        align-items:center;
        background-color: rgba( 237, 237, 237, 0.456 );
        
    }
    .block3 .right{
/*        border:2px solid black;*/
        width:40%;
        text-align:center;
/*
        display:flex;
        flex-wrap:wrap;
        justify-content: center;
*/
    }
    .block3 .right img{
        max-width:95%;
        max-height:90%;
        padding-top:2rem;
        padding-bottom:2rem;
/*        border:1px solid black;*/
    }
    .block3 .left{
/*        border:2px solid blue;*/
        width:60%;
        padding-top:2rem;
        padding-bottom:2rem;
        padding-left:2%;
    }
    .block3 .left .title{
/*        border:2px solid blue;*/
        font-size:2rem;
/*        font-weight: 600;*/
    }
    .block3 .left .desc{
/*        border:2px solid blue;*/
        font-size:1.2rem;
    }
    .block3 .left .desc .list{
/*        border:2px solid blue;*/
        width:100%;
        display:flex;
        flex-wrap:wrap;
        padding-top:1rem;
        padding-left:5%;
    }
    .block3 .left .desc .bulleticon{
/*        border:2px solid red;*/
/*        width:2rem;*/
        width:10%;
        text-align: center;
        color:green;
    }
    .block3 .left .desc .bulletdesc{        
/*        border:2px solid black;*/
        width:90%;
        padding-right:10%;
    }
    .block4{
/*        border:1px solid black;*/
        width:100%;
        height:400px;
        display:flex;
        align-items:center;
        padding-top:1rem;
        padding-bottom:2rem;
        background-color: rgba( 237, 237, 237, 0.456 );
    }
    .block4 .left{
/*        border:1px solid black;*/
        width:45%;
        text-align:center;
    }
    .block4 .left img{
/*        border:1px solid black;*/
        width:80%;
    }
    .block4 .right{
/*        border:1px solid black;*/
        width:55%;
        margin:-3%;
    }
    
    .block4 .right .title{
        font-size:2rem;
    }
    
    .block4 .right .desc{
        font-size:1.2rem;
    }
    .block6{
/*        border:2px solid black;*/
/*        height:500px;*/
        width:100%;
        display:flex;
        justify-content:center;
        align-items:center;
        padding-top:2rem;
        padding-bottom:2rem;
    }
    .block6 .contatainerz{
/*        border:2px solid black;*/
        display:flex;
        flex-wrap:wrap;
        justify-content: center;
        width:100%;
    }
    .block6 .title{
        font-size:2rem;
        width:100%;
        text-align:center;
        font-weight:600;
    }
    .block6 .desc{
        font-size:1.5rem;
        width:100%;
        text-align:center;
    }
    .block6 .contatainerz .bullets-con{
/*        border:1px solid black;*/
        width:80%;
        display:flex;
        flex-wrap:wrap;
        justify-content: center;
    }
    .block6 .contatainerz .bullets{
/*        border:1px solid black;*/
        background-color:rgba( 0, 0, 122, 0.092 );
        width:48%;
        margin-top:1rem;
        margin-left:0.5rem;
        margin-right:0.5rem;
        padding:1rem;
        
    }
    
    .block6 .contatainerz .bullets .t{
        font-size:1.2rem;
        font-weight:600;
    }
    .block6 .contatainerz .bullets .d{
        font-size:0.9rem;
        padding-left:2rem;
    }
    .block6 .contatainerz .bullets i{
        color:blue;
    }
</style>

<body oncontextmenu=”return false” class="noselect" id="body">
    <div class="body-wrapper">
        <div class="body-container">
            <?php include "../header.php" ?>
            <!--------------------------- BANNER -------------------------------------------->
            <div class="banner-div noselect">
                <div class="banner-div-container">
                    <div class="banner-text">
                        <div class="banner-title"><i class="fas fa-layer-group"></i>&nbsp;Consultation Services</div>
                        <div class="banner-tagline">ServiceIT+ employs an experienced team of qualified IT professionals and offers a wide range of consulting services and technical support. lorem</div>
                    </div>
                </div>
            </div>
            <div class="block1">
                <div class="title">Consultation Services to Meet you business needs!</div>
                <div class="desc">The growing complexity of modern computer systems makes it impossible to maximize the capacity available without a deep knowledge and expertise. Focusing on the efficient use of IT by our customers, Softline employs an experienced team of qualified IT professionals and offers a wide range of consulting services and technical support. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis molestiae neque, dignissimos in quae dolores deserunt odio modi. Illum laudantium, eligendi dolor velit ipsam. Voluptatem iste aut vel perspiciatis, odit.</div>
            </div>
            <div class="block2">
                <div class="left">
                    <img src="../images/services/consult1.svg" alt="">
                </div>
                <div class="right">
                    <div class="title">ITSM Consultation</div>
                    <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur consectetur earum nesciunt. Natus recusandae optio ad, nisi iure magnam maxime quos? Magnam asperiores minima quia impedit eligendi eaque dolor ratione!
                        <div class="list">
                            <div class="bulleticon"><i class="fas fa-check"></i></div>
                            <div class="bulletdesc">Lorem ipsum dolor sit amet</div>
                            <div class="bulleticon"><i class="fas fa-check"></i></div>
                            <div class="bulletdesc">consectetur adipisicing elit</div>
                            <div class="bulleticon"><i class="fas fa-check"></i></div>
                            <div class="bulletdesc"> Saepe amet expedita voluptatem facilis deserunt provident</div>
                            <div class="bulleticon"><i class="fas fa-check"></i></div>
                            <div class="bulletdesc">voluptatum culpa ratione quos minima unde,</div>
                            <div class="bulleticon"><i class="fas fa-check"></i></div>
                            <div class="bulletdesc">nam similique iusto voluptas itaque, velit. Quasi, expedita, quod.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block3">
                <div class="left">
                    <div class="title">Vulnerability Assessment</div>
                    <div class="desc">We help provide your organization with information on the security weaknesses and provide direction on how to assess the risks associated with those weaknesses and evolving threats. We aim to give your organization a better understanding of its assets, security flaws and overall risk, reducing the likelihood that a cybercriminal will breach your systems.
                    </div>
                </div>
                <div class="right">
                    <img src="../images/services/img3.svg" alt="">

                </div>
            </div>
            <div class="block6">
                <div class="contatainerz">
                    <div class="title">Center for Internet Security</div>
                    <div class="desc">Helping organizations around the world start secure and stay secure</div>
                    <div class="bullets-con">
                        <div class="bullets">
                            <div class="t"><i class="fas fa-check"></i>&nbsp;&nbsp;Best Practices</div>
                            <div class="d">Global standards verified by an objective, volunteer community of cyber experts</div>
                        </div>
                        <div class="bullets">
                            <div class="t"><i class="fas fa-check"></i>&nbsp;&nbsp;Secure Your Systems & Platforms</div>
                            <div class="d">Quickly establish the protections providing the highest payoff for your organization </div>
                        </div>
                        <div class="bullets">
                            <div class="t"><i class="fas fa-check"></i>&nbsp;&nbsp;CIS Controls</div>
                            <div class="d">Build and lead communities to enable an environment of trust in cyberspace </div>
                        </div>
                        <div class="bullets">
                            <div class="t"><i class="fas fa-check"></i>&nbsp;&nbsp;CIS Benchmarks</div>
                            <div class="d">Proven CIS Benchmarks guidelines to protect over 100 distinct systems & platforms </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="block4">
                <div class="left">
                    <img src="../images/services/img5.svg" alt="">
                </div>
                <div class="right">
                    <div class="title">Data Protection Authorities</div>
                    <div class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sit amet metus pharetra massa congue cursus quis consequat est. Nunc condimentum ultrices suscipit. Morbi molestie nunc sit amet tristique ornare. Sed efficitur ligula id arcu bibendum, id rutrum nisi consectetur. Nullam ultrices vel erat vitae fringilla. Cras metus enim, condimentum ac elementum eget, dictum ut lectus. Aliquam facilisis, lacus sed hendrerit scelerisque, justo massa tincidunt dolor, quis malesuada urna purus sit amet tellus. Sed eu ipsum at tellus ultricies molestie. Mauris a pulvinar tellus, vitae volutpat sapien.
                    </div>
                </div>
            </div>
            <?php include "modal.php" ?>
            <?php include "../footer.php" ?>
        </div>
    </div>
</body>

</html>
<?php echo "<script>"; include "../js/jquery-3.2.1.min.js"; echo "</script>";?>
<?php include "../contactus/widgetv2.php" ?>