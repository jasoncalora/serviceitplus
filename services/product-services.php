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
        font-size: 1rem;
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
    .block4{
/*        border:4px solid black;*/
        width:100%;
        display:flex;
        padding-top:1.5rem;
        padding-bottom:1.5rem;
        background:url('../images/services/bg2.svg');
        background-repeat: no-repeat;
        background-size: cover;
        /*
        padding-top:2rem;
        padding-bottom:2rem;
*/
    }
    .block4 .left{
/*        border:1px solid black;*/
        width:60%;
        padding-left:10%;
        font-size:2rem;
        display:flex;
        justify-content:flex-end;
        align-items:center;
        color:#e0e0e0;
        padding-right:10%;
    }
    .block4 .right{
/*        border:1px solid black;*/
        width:40%;
        display:flex;
        align-items:center;
        font-size:1rem;
    }
    .block4 .right button{
        padding-top:0.5rem;
        padding-bottom:0.5rem;
        padding-left:2rem;
        padding-right:2rem;
    }
    .contact-modal{
        height:100%;
        width:100%;
        position:fixed;
        z-index:999;
/*        background-color:rgba( 0, 0, 0, 0.803);*/
/*        display:flex;*/
        display:none;
        justify-content: center;
        align-items:center;
/*        border:2px solid red;*/
    }
    .modal-background{
        width:100%;
        height:100%;
        background-color:rgba( 0, 0, 0, 0.803);
        position:absolute;
        z-index:1;
    }
    .contact-modal .cform{
/*        border:3px solid red;*/
/*        height:70%;*/
        width:40%;
        background-color:white;
        display:flex;
        flex-wrap:wrap;
        justify-content:flex-start;
        border-radius:10px;
        z-index:2;
/*        padding:1rem;*/
/*        padding-top:2rem;
        n */
    }
    .cform .formtitle{
        width:100%;
        font-size:2rem;
        color:black;    
        text-align:center;    
    }
    .cform .formdesc{
        width:100%;
        font-size:0.9rem;
        text-align:center;
        color:black;
    }
    .forminputs-wrapper{
/*        border:3px solid black;*/
        width:100%;
        display:flex;
        flex-wrap:wrap;
        justify-content: center;
/*        padding-left:10%;*/
    }
    .forminputs-container{
/*         border:3px solid red;*/
        width:100%;
        display:flex;
        flex-wrap:wrap;
        padding-top:1.5rem;
    }
    .form-border{
        border:1px solid #eaeaea;
        font-size:1rem;
        padding-left:0.5rem;
        padding-right:0.5rem;
    }
    .form-border p{
/*        border:1px solid black;*/
        font-size:0.8rem;
        padding-top:0.2rem;
        margin-bottom:0px;
        color:#717173;
        font-weight:600;
    }
    .form-border input{
        width:100%;
        height:2rem;
        bordeR:0;
/*        font-weight: 600;*/
/*        bordeR:1px solid red;*/
    }
    input::-webkit-input-placeholder { /* Chrome/Opera/Safari */
      color: rgba( 198, 198, 198, 0.708 );
/*        font-weight: 500;*/
    }
    input::-moz-placeholder { /* Firefox 19+ */
      color: rgba( 198, 198, 198, 0.708 );
    }
    input:-ms-input-placeholder { /* IE 10+ */
      color: rgba( 198, 198, 198, 0.708 );
    }
    input:-moz-placeholder { /* Firefox 18- */
      color: rgba( 198, 198, 198, 0.708 );
    }
    input:focus::-webkit-input-placeholder { /* Chrome/Opera/Safari */
      color: rgba( 96, 96, 96, 0.708 );
/*        font-weight: 600;*/
    }
    input:focus::-moz-placeholder { /* Firefox 19+ */
      color: rgba( 96, 96, 96, 0.708 );
    }
    input:focus:-ms-input-placeholder { /* IE 10+ */
      color: rgba( 96, 96, 96, 0.708 );
    }
    input:focus:-moz-placeholder { /* Firefox 18- */
      color: rgba( 96, 96, 96, 0.708 );
    }
    .form-border input:focus{
        outline: none;
    }
    .form-border textarea:focus{
        outline: none;
    }
    .form-border:nth-child(1){
        width:100%;
    }
    .form-border:nth-child(2){
        width:50%;
    }
    .form-border:nth-child(3){
        width:50%;
    }
    .form-border:nth-child(4){
        width:55%;
    }
    .form-border:nth-child(5){
        width:45%;
    }
    .form-border:nth-child(6){
        width:100%;
    }
    .form-border:nth-child(6) textarea{
        width:100%;
        border:0;resize: none;
    }
    .form-border:last-of-type{
        width:100%;
        bordeR:0;
        text-align:center;
        padding-top:1rem;
        padding-bottom:0.5rem;
    }
    .form-border:last-of-type button{
        margin-left:0.5rem;
        margin-right:0.5rem;
        padding-left:1rem;
        padding-right:1rem;
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
            <div class="block4">
                <div class="left">Ready to get started?</div>
                <div class="right"><button type="button" class="btn btn-success" onclick="showModal()">Contact our Sales Team</button></div>
            </div>
            <div class="contact-modal" id="contact-modal">
               <div class="modal-background" onclick="hideModal()"></div>
                <div class="cform">
                    <div class="formtitle">Get In touch With Us!</div>
                    <div class="formdesc">Feel free to drop us a comment or inquiry and we'll get back to you as soon as possible.</div>
                    <div class="forminputs-wrapper">
                        <div class="forminputs-container">
                            <div class="form-border">
                                <p>Full Name</p>
                                <input type="text" id="fullname" class="textbox" placeholder="Enter your Full Name" autocomplete="off">
                            </div>
                            <div class="form-border">
                                <p>Company</p>
                                <input type="text" id="company" class="company" placeholder="Enter your Company Name" autocomplete="off">
                            </div>
                            <div class="form-border">
                                <p>Designation</p>
                                <input type="text" id="desig" class="desig" placeholder="Enter Position in Company" autocomplete="off">
                            </div>
                            <div class="form-border">
                                <p>Email Address</p>
                                <input type="text" id="email" class="textbox" placeholder="Enter your Email Address" autocomplete="off">
                            </div>
                            <div class="form-border">
                                <p>Phone Number</p>
                                <input type="text" id="contactno" class="contactno" placeholder="Enter your Contact Number" autocomplete="off">
                            </div>
                            <div class="form-border">
                               <p>Message</p>
                                <textarea name="message" id="message" cols="" rows="4" placeholder="Enter your message" maxlength="255"></textarea>
                            </div>
                            <div class="form-border">
                                <button type="button" class="btn btn-success" onclick="hideModal()"><i class="far fa-share-square"></i>&nbsp;&nbsp;Submit</button>
                                <button type="button" class="btn btn-danger" onclick="hideModal()"><i class="fas fa-ban"></i>&nbsp;&nbsp;Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include "../footer.php" ?>
        </div>
    </div>
</body>

</html>