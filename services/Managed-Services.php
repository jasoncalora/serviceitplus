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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- header css & js  -->
    <script type="text/javascript" src="../js/header2.js"></script>
    <link rel="stylesheet" href="../css/header.css" type="text/css" />
    <!--	<link rel="stylesheet" href="../css/services.css" type="text/css" />-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/aos.css">
    <!--    <script type="text/javascript" src="//www.serviceitplus.com/livechat2/php/app.php?widget-init.js"></script>-->
</head>
<script>
    function showModal(){
    document.getElementById("contact-modal").setAttribute("style","display:flex;");
    document.getElementById("body").setAttribute("style","overflow:hidden;");
}
function hideModal(){
        document.getElementById("contact-modal").setAttribute("style","display:none;");
        document.getElementById("body").setAttribute("style","overflow:show;");
}
</script>
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
        background: url(../images/services/banner3.4.svg);
        background-size:cover;
        background-repeat: no-repeat;
/*        border:5px solid black;*/
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
            <?php include "../footer.php" ?>
        </div>
    </div>
</body>

</html>