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
        height:400px;
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
    .block5{
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
    .block5 .left{
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
    .block5 .right{
/*        border:1px solid black;*/
        width:40%;
        display:flex;
        align-items:center;
        font-size:1rem;
    }
    .block5 .right button{
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
                <div class="title">Consultaion Services to Meet you business needs!</div>
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
                    <div class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sit amet metus pharetra massa congue cursus quis consequat est. Nunc condimentum ultrices suscipit. Morbi molestie nunc sit amet tristique ornare. Sed efficitur ligula id arcu bibendum, id rutrum nisi consectetur. Nullam ultrices vel erat vitae fringilla. Cras metus enim, condimentum ac elementum eget, dictum ut lectus. Aliquam facilisis, lacus sed hendrerit scelerisque, justo massa tincidunt dolor, quis malesuada urna purus sit amet tellus. Sed eu ipsum at tellus ultricies molestie. Mauris a pulvinar tellus, vitae volutpat sapien.
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
                    <img src="../images/services/img4.svg" alt="">
                </div>
                <div class="right">
                    <div class="title">Data Protection Authorities</div>
                    <div class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sit amet metus pharetra massa congue cursus quis consequat est. Nunc condimentum ultrices suscipit. Morbi molestie nunc sit amet tristique ornare. Sed efficitur ligula id arcu bibendum, id rutrum nisi consectetur. Nullam ultrices vel erat vitae fringilla. Cras metus enim, condimentum ac elementum eget, dictum ut lectus. Aliquam facilisis, lacus sed hendrerit scelerisque, justo massa tincidunt dolor, quis malesuada urna purus sit amet tellus. Sed eu ipsum at tellus ultricies molestie. Mauris a pulvinar tellus, vitae volutpat sapien.
                    </div>
                </div>
            </div>
            <div class="block5">
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