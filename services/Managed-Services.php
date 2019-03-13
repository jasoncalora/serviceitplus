<!DOCTYPE html>
<html lang="en">

<head>
    <title>Product Services | Service IT+</title>
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
<!--    	<link rel="stylesheet" href="../css/services.css" type="text/css" />-->
<!--    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">-->

<!--    <link rel="stylesheet" href="../css/aos.css">-->
    <!--    <script type="text/javascript" src="//www.serviceitplus.com/livechat2/php/app.php?widget-init.js"></script>-->
</head>
<?php include "bs-fa.html" ?>
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

    .header {
        background-color: rgba(25, 25, 122, 0.242);
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
        background: url(../images/services/banner3.4.svg);
        background-size: cover;
        background-repeat: no-repeat;
        /*        border:5px solid black;*/
    }

    .block1 {
        /*        border:4px solid black;*/
        /*        height:400px;*/
        width: 100%;
        padding-top: 2rem;
        padding-bottom: 3rem;
        display: flex;
        flex-wrap: wrap;
    }

    .block1 .title {
        /*        border:2px solid red;*/
        width: 100%;
        font-size: 2rem;
        width: 100%;
        text-align: center;
        font-weight: 600;
    }

    .block1 .desc {
        width: 100%;
        font-size: 1.2rem;
        padding-left: 10%;
        padding-right: 10%;
        text-align: center;
    }

    .block1 .service-container {
        /*        border: 2px solid black;*/
        width: 100%;
        padding-top: 1rem;
        padding-bottom: 1rem;
        padding-left: 5%;
        padding-right: 5%;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .block1 .service-container .card {
        width: 32%;
        /*        text-align: center;*/
        margin-left: 1rem;
        margin-left: 1rem;
        margin-top: 1rem;

    }

    .card .card-title {
        font-size: 1.5rem;
        color: #383838;
        /*        font-weight:600;*/
    }

    .card .card-text {
        font-size: 1rem;
        color: #7a7a7a;
    }

    .block2 {
        width: 100%;
        /*        border:2px solid black;*/
        display: flex;
        padding-top: 2rem;
        padding-bottom: 2rem;
        padding-left: 5%;
        padding-right: 2%;
        background-color: #efefef;
    }

    .block2 .left {
        width: 55%;
        /*        border:1px solid red;*/
    }

    .block2 .left .title {
        font-size: 1.8rem;
        font-weight: 600;
        color: #2d2d2d;
    }

    .block2 .left .desc {
        font-size: 1rem;
        color: #494949;
    }

    .block2 .left .bullets {
        font-size: 1rem;
/*                border:1px solid black;*/
        padding-left: 5%;
        padding-top: 1rem;
        padding-bottom: 1rem;
        display: flex;
        flex-wrap: wrap;
    }

    .block2 .left .bullets .card {
        width: 40%;
        margin-left: 0.5rem;
        margin-right: 0.5rem;
        margin-top: 0.5rem;
        margin-bottom: 0.5rem;
    }

    .block2 .left .bullets .card .card-body {
        display: flex;
        align-items: center;
        color: #666666;
        /*        border:1px solid black;*/
    }

    .bullets .card .card-body i{
        color: orange;
        font-size: 1.5rem;
        padding-right: 1rem;
    }

    .block2 .right {
        width: 45%;
        /*        border:2px solid blue;*/
    }

    .block2 .right img {
        max-height: 300px;
    }

    .block3 {
        /*        border:1px solid black;*/
        width: 100%;
        padding-left: 5%;
        padding-right: 5%;
        padding-top: 2rem;
        padding-bottom: 4rem;
        display: flex;
        flex-wrap: wrap;
        background-color: #f7f7f7;
    }

    .block3 .title {
        width: 100%;
        display: flex;
        justify-content: center;
        font-size: 2rem;
        font-weight: 600;
        /*        border:1px solid black;*/
    }

    .block3 .desc {
        width: 100%;
        font-size: 1.2rem;
        text-align: center;
        padding-left: 7%;
        padding-right: 7%;
        padding-bottom: 2rem;
    }

    .block3 .left {
        width: 30%;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
    }

    .block3 .items-container {
        /*        border:1px solid black;*/
        display: flex;
        flex-wrap: wrap;
    }

    .block3 .item-bullet {
        /*        border:1px solid red;*/
        padding-top: 2rem;
        width: 10%;
        text-align: center;
        font-size: 1.2rem;
        color: limegreen;
    }

    .block3 .item {
        /*        border:1px solid red;*/
        padding-top: 2rem;
        width: 90%;
        font-size: 1rem;
    }

    .block3 .middle {
        width: 40%;
        /*        border:1px solid red;*/
    }

    .block3 .middle img {
        max-height: 350px;
        /*        border:1px solid black;*/
    }

    .block3 .right {
        width: 30%;
        /*        border:1px solid red;*/
        display: flex;
        flex-wrap: wrap;
        align-items: center;
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
                        <div class="banner-title"><i class="fas fa-users"></i>&nbsp;Managed Services</div>
                        <div class="banner-tagline">Scale up your business through ServiceIT+ managed services. </div>
                    </div>
                </div>
            </div>
            <div class="block1">
                <div class="title">ITSM System Administration</div>
                <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi nulla, fugit illum in voluptatem consequatur molestiae, reiciendis veritatis neque, aperiam velit. Ipsam esse eaque dolorem repellendus, animi laudantium sit pariatur.</div>
                <div class="service-container">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Sub Service 1</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Sub Service 2</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Sub Service 3</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Sub Service 4</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Sub Service 5</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Sub Service 6</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block2">
                <div class="left">
                    <div class="title">Achieve Better Quality With ServiceIT+</div>
                    <div class="desc">
                        ServiceIT+ provides logical and regression test services to validate that each of your software application’s
                        functions operate in accordance with their behavioral requirement specifications, ensuring behavioral conformity and quality.
                    </div>
                    <div class="bullets">
                        <div class="card">
                            <div class="card-body">
                                <i class="fas fa-cogs"></i>Functional Testing
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <i class="fas fa-retweet"></i>Regression Testing
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <i class="fas fa-sitemap"></i>Compatibility Testing
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <i class="fas fa-mobile-alt"></i>Mobile Testing
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <img src="../images/services/testing.svg" alt="">
                </div>
            </div>
            <div class="block3">
                <div class="title">
                    Asset Discovery
                </div>
                <div class="desc">
                    We help you account for All Your IT Assets by scanning your environment to gather information about your devices. ServiceIT+ offers to determine exactly what devices and nodes are part of a network at any given time.
                </div>
                <div class="left">
                    <div class="items-container">
                        <div class="item-bullet"><i class="fas fa-check"></i></div>
                        <div class="item">Discover all your Windows machines with a Windows domain scan, script scan, or agent-based scan.</div>
                        <div class="item-bullet"><i class="fas fa-check"></i></div>
                        <div class="item">Use the network scan to discover non-windows machines (Linux, Solaris, MAC, and IBM-AIX machines), VMHost machines, and IP devices such as printers, routers, switches, and access points.</div>
                    </div>
                </div>
                <div class="middle">
                    <img src="../images/services/asset.svg" alt="">
                </div>
                <div class="right">
                    <div class="items-container">
                        <div class="item-bullet"><i class="fas fa-check"></i></div>
                        <div class="item">Manually import all asset details from various sites using a simple remote scan technique.</div>
                        <div class="item-bullet"><i class="fas fa-check"></i></div>
                        <div class="item">Discover all the IP-enabled devices on your network</div>
                        <div class="item-bullet"><i class="fas fa-check"></i></div>
                        <div class="item">Determine what software and services are installed on them, how they’re configured</div>
                    </div>
                </div>

            </div>
            <?php include "modal.php" ?>
            <?php include "../footer.php" ?>
        </div>
    </div>
</body>

</html>