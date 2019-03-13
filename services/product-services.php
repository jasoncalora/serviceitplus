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
    <!--	<link rel="stylesheet" href="../css/services.css" type="text/css" />-->
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

    .body-container {
        /*        border:4px solid black;*/
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
        background: url(../images/services/product-services.png);
        background-size:cover;
        background-repeat: no-repeat;
    }

    .block1 {
        padding-top: 2rem;
        padding-bottom: 2rem;
        width: 100%;
/*        background-color: rgba( 242, 242, 242, 0.703 );*/
        /*        background-color:#e0e0e0;*/
    }

    .block1 .title {
        /*        border:1px solid black;*/
        font-size: 2rem;
        width: 100%;
        text-align: center;
        font-weight: 600;
    }

    .block1 .title-desc {
        /*        border:1px solid black;*/
        font-size: 1.2rem;
        margin-top: 0.5rem;
        line-height: 1.5rem;
        padding-left: 15%;
        padding-right: 15%;
        text-align: center;
    }

    .block1-container {
        /*        border:1px solid black;*/
        padding-left: 10%;
        padding-right: 10%;
        padding-top: 1%;
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .block1-container .items {
        /*        border:1px solid black;*/
        width: 24%;
        margin-top: 0.5%;
        margin-left: 0.4%;
        margin-right: 0.4%;
        padding-top: 2%;
        padding-bottom: 2%;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        border-radius: 10px;
        /*        background-color:rgba( 73, 73, 73, 0.573 );*/
    }

    .items .logo {
        /*        border:1px solid black;*/
        /*        height:200px;*/
        /*        width:200px;*/
        font-size: 7rem;
        line-height: 5rem;
        color: #f49200;
    }

    .block1-container .item-name {
        padding-top: 5%;
        width: 100%;
        font-size: 1.2rem;
        font-weight: 600;
        text-align: center;
    }

    .block1-container .item-desc {
        width: 100%;
        padding-top: 0.8rem;
        padding-left: 5%;
        padding-right: 5%;
        font-size: 0.8rem;
        text-align: Justify;
    }

    .block2 {
        /*        border:2px solid black;*/
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        background-color: rgba( 242, 242, 242, 0.845 );
        padding-top: 1rem;
        padding-bottom: 3rem;
    }

    .block2 .title {
        width: 100%;
        font-size: 2rem;
        text-align: center;
        padding-top: 1rem;
        font-weight: 600;
    }

    .block2 .title-desc {
        font-size: 1.2rem;
        width: 100%;
        text-align: center;
    }

    .block2 .content-wrapper {
        width: 100%;
        /*        padding-top:2rem;*/
        /*        border:5px solid black;*/
        display: flex;
        flex-wrap: wrap;
        padding-left: 5%;
        padding-right: 5%;
    }

    .block2 .content-title {
        margin-top: 1rem;
        padding-bottom: 0.2rem;
        width: 100%;
        font-size: 1.5rem;
/*        font-weight: 600;*/
    }

    .block2 .content-desc {
        width: 100%;
        font-size: 1rem;
        text-align: justify;
    }
    .block3{
/*        border:1px solid black;*/
        width:100%;
        padding-left:10%;
        padding-right:10%;
        padding-top:2rem;
        padding-bottom:4rem;
    }
    .block3 .title{
/*        padding-top:1rem;*/
        font-size:2rem;
        text-align:center;
/*        font-weight: 600;*/
    }
    .block3 .content{
/*        border:1px solid black;*/
        display:flex;
        width:100%;
        padding-top:2rem;
        flex-wrap:wrap;
        justify-content:space-between;
    }
    .block3 .content .items{
        border:1px solid rgba( 193, 193, 193, 0.845 );
        border-radius:5px;
        width:30%;
        padding-left:1rem;
        padding-right:1rem;
        padding-top:0.5rem;
        padding-bottom:1.5rem;
        box-shadow: 3px 5px rgba( 30, 30, 30, 0.113 );
    }
    .block3 .content .items:nth-child(1){
/*        background:url('../images/services/test3.svg');*/
    }
    .block3 .content .item-title{
        font-size:1.2rem;
        font-weight: 600;
        color:#ee9324;
        line-height:2.5rem;
        border-bottom:1px solid rgba( 193, 193, 193, 0.845 );
/*        border:1px solid black;*/
    }
    .block3 .content .item-title:hover{
        cursor:pointer;
        filter:brightness(102%);
/*        filter:contrast(80%);*/
    }
    .block3 .content .item-desc{
        font-size:1rem;
/*        text-align:justify;*/
        padding-top:0.5rem;
/*        padding-bottom:1rem;*/
        color:#7f7f7f;
/*        border:1px solid black;*/
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
                        <div class="banner-title"><i class="fas fa-layer-group"></i>&nbsp;Product Services</div>
                        <div class="banner-tagline">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque nam incidunt quam consequatur architecto unde voluptas facilis maxime facere.</div>
                    </div>
                </div>
            </div>
            <div class="block1">
                <div class="title">Product Enhancement</div>
                <div class="title-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda ut, veniam eaque. Repellat sint officia velit laborum, non illum assumenda eos, iure quia sequi amet libero minima? Velit, suscipit praesentium!</div>
                <div class="block1-container">
                    <div class="items">
                        <div class="logo"><i class="fas fa-database"></i></div>
                        <!--            <div class="logo"><i class="fas fa-hand-middle-finger"></i></div>-->
                        <div class="item-name">Data Migration</div>
                        <div class="item-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat in, placeat laboriosam animi nemo </div>
                    </div>
                    <div class="items">
                                    <div class="logo"><i class="far fa-arrow-alt-circle-up"></i></div>
<!--                        <div class="logo"><i class="fas fa-hand-middle-finger"></i></div>-->
                        <div class="item-name">Version Upgrade</div>
                        <div class="item-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat in, placeat laboriosam animi nemo </div>
                    </div>
                    <div class="items">
                        <div class="logo"><i class="fas fa-tools"></i></div>
                        <!--            <div class="logo"><i class="fas fa-hand-middle-finger"></i></div>-->
                        <div class="item-name">System Enhancement</div>
                        <div class="item-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat in, placeat laboriosam animi nemo </div>
                    </div>
                    <div class="items">
                        <div class="logo"><i class="fas fa-undo-alt"></i></div>
                        <!--            <div class="logo"><i class="fas fa-hand-middle-finger"></i></div>-->
                        <div class="item-name">Process Automation</div>
                        <div class="item-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat in, placeat laboriosam animi nemo </div>
                    </div>
                    <div class="items">
                        <div class="logo"><i class="fab fa-cloudscale"></i></div>
                        <!--            <div class="logo"><i class="fas fa-hand-middle-finger"></i></div>-->
                        <div class="item-name">Database and System Optimization</div>
                        <div class="item-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat in, placeat laboriosam animi nemo </div>
                    </div>
                    <div class="items">
                        <div class="logo"><i class="fas fa-cloud-upload-alt"></i></div>
                        <!--            <div class="logo"><i class="fas fa-hand-middle-finger"></i></div>-->
                        <div class="item-name">Infra Migration</div>
                        <div class="item-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat in, placeat laboriosam animi nemo </div>
                    </div>
                    <div class="items">
                        <div class="logo"><i class="fas fa-project-diagram"></i></div>
                        <!--            <div class="logo"><i class="fas fa-hand-middle-finger"></i></div>-->
                        <div class="item-name">Integration Services</div>
                        <div class="item-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat in, placeat laboriosam animi nemo </div>
                    </div>
                </div>
            </div>
            <div class="block2">
                <div class="title">Find the Right Learning with ServiceIT+</div>
                <div class="title-desc">Instructor-Led Trainings and Courses taught by Certified Industry Experts</div>
                <div class="content-wrapper">
                    <div class="content-title">Product Best Practices</div>
                    <div class="content-desc">You know a lot, but you might be unaware of product features that could really benefit your business. Optimize your day-to-day operations with tips and tricks from the professionals on how to work more efficiently and use features for better results. We’ll help you learn how to master the products to solve business problems as efficiently as possible.</div>
                    <div class="content-title">Customized Training</div>
                    <div class="content-desc">Do you have some new team members who could benefit from a product overview and Q&A time? Are you looking for guidance on how to use a particular software feature? Or maybe your team is new to the i and you’d like some general training on the platform. We can customize our training to meet you company’s needs, whether your users are beginner, intermediate, or advanced.</div>
                    <div class="content-title">Product Mentoring</div>
                    <div class="content-desc">Increase your knowledge about the HelpSystems products you use every day in an informal setting. If you don’t want to attend a training course, product mentoring aims to help you develop knowledge and learn best practices through one-on-one training.</div>
                    <div class="content-title">Product Certification</div>
                    <div class="content-desc">Prove you’re the expert by receiving your product certification for certain HelpSystems products. Take a timed multiple choice exam and receive proof of product certification to meet training requirements or to become an internal resource for the products you use every day.</div>
                </div>
            </div>
            <div class="block3">
                <div class="title">Training Courses</div>
                <div class="content">
                    <div class="items">
                        <div class="item-title">Custom Training</div>
                        <div class="item-desc">Looking for something to meet your company's specific training needs? Schedule one of our senior instructors to deliver custom training at either our location or yours.</div>
                    </div>
                    <div class="items">
                        <div class="item-title">ITIL Training</div>
                        <div class="item-desc">Dicta, autem ex beatae id adipisci suscipit inventore porro similique consequatur cum repellendus dolorum, sint commodi animi aliquam libero eum odio nam.</div>

                    </div>
                    <div class="items">
                        <div class="item-title">ITSM Training Courses</div>
                        <div class="item-desc">Maiores eaque odit quod! Dolorem molestias, distinctio iste repellendus doloremque temporibus quas quidem, cumque harum quo, aliquam officia sit vel natus eaque.</div>
                    </div>
                </div>
            </div>
            <div class="block6">
                
            </div>
            <?php include "modal.php" ?>
            <?php include "../footer.php" ?>
        </div>
    </div>
</body>

</html>