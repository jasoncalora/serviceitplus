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
        background-color:rgba( 255, 255, 255, 0.056 );
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
        display:flex;
        padding-right:5%;
    }
    .block2 .left{
/*        border:2px solid black;*/
        width:40%;
        text-align:center;
/*
        display:flex;
        flex-wrap:wrap;
        justify-content: center;
*/
    }
    .block2 .left img{
        max-width:50%;
        padding-top:2rem;
        padding-bottom:2rem;
    }
    .block2 .right{
/*        border:2px solid blue;*/
        width:60%;
        padding-top:2rem;
        padding-bottom:2rem;
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
        display:flex;
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
        padding-top:2rem;
        padding-bottom:2rem;
/*        border:1px solid black;*/
    }
    .block3 .left{
/*        border:2px solid blue;*/
        width:60%;
        padding-top:2rem;
        padding-bottom:2rem;
        padding-left:5%;
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
        display:flex;
        padding-top:1rem;
        padding-bottom:2rem;
    }
    .block4 .left{
/*        border:1px solid black;*/
        width:45%;
        text-align:center;
    }
    .block4 .left img{
        width:70%;
    }
    .block4 .right{
        width:55%;
    }
    
    .block4 .right .title{
        font-size:2rem;
    }
    
    .block4 .right .desc{
        font-size:1.2rem;
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
               <div class="title">Consultaion Services to Meet you business needs!</div>
               <div class="desc">The growing complexity of modern computer systems makes it impossible to maximize the capacity available without a deep knowledge and expertise. Focusing on the efficient use of IT by our customers, Softline employs an experienced team of qualified IT professionals and offers a wide range of consulting services and technical support. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis molestiae neque, dignissimos in quae dolores deserunt odio modi. Illum laudantium, eligendi dolor velit ipsam. Voluptatem iste aut vel perspiciatis, odit.</div>                
            </div>
            <div class="block2">
                <div class="left">
                    <img src="../images/services/consult1.svg" alt="">
                </div>
                <div class="right">
                    <div class="title">Consultation 1</div>
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
                <div class="left"><div class="title">Consultation 2</div>
                    <div class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sit amet metus pharetra massa congue cursus quis consequat est. Nunc condimentum ultrices suscipit. Morbi molestie nunc sit amet tristique ornare. Sed efficitur ligula id arcu bibendum, id rutrum nisi consectetur. Nullam ultrices vel erat vitae fringilla. Cras metus enim, condimentum ac elementum eget, dictum ut lectus. Aliquam facilisis, lacus sed hendrerit scelerisque, justo massa tincidunt dolor, quis malesuada urna purus sit amet tellus. Sed eu ipsum at tellus ultricies molestie. Mauris a pulvinar tellus, vitae volutpat sapien.
                    </div>
                </div>
                <div class="right">
                    <img src="../images/services/img3.svg" alt="">
                    
                </div>
            </div>
            <div class="block4">
                <div class="left">
                    <img src="../images/services/img4.svg" alt="">
                </div>
                <div class="right">
                   <div class="title">Consultation 3</div>
                    <div class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sit amet metus pharetra massa congue cursus quis consequat est. Nunc condimentum ultrices suscipit. Morbi molestie nunc sit amet tristique ornare. Sed efficitur ligula id arcu bibendum, id rutrum nisi consectetur. Nullam ultrices vel erat vitae fringilla. Cras metus enim, condimentum ac elementum eget, dictum ut lectus. Aliquam facilisis, lacus sed hendrerit scelerisque, justo massa tincidunt dolor, quis malesuada urna purus sit amet tellus. Sed eu ipsum at tellus ultricies molestie. Mauris a pulvinar tellus, vitae volutpat sapien.
                    </div>
                </div>
            </div>
            <?php include "../footer.php" ?>
        </div>
    </div>
</body>

</html>