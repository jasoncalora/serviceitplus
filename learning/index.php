<?php
$dir = "videos/";
function recursive_scandir($dir){
	$contents = array();
	foreach(array_diff(scandir($dir), array('.', '..')) as $file){
		$path = $dir.DIRECTORY_SEPARATOR.$file;
		if(is_dir($path)){
			$contents = array_merge($contents, recursive_scandir($path));
		} else {
			$contents[] = $path;
		}
	}
	return $contents;
}
?>
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
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />
    <!--    <link rel="stylesheet" href="../css/aos.css">-->
    <!--    <script type="text/javascript" src="//www.serviceitplus.com/livechat2/php/app.php?widget-init.js"></script>-->
</head>
<script>
    $(document).keyup(function(e) {
     if (e.key === "Escape") { // escape key maps to keycode `27`
        hideModal();
    }
    });
function getVids(str1) {
    document.getElementById("videos-content").innerHTML = "<div style='width:100%;display:flex;justify-content:center;color:#f16a21;'><i class='fa fa-spinner fa-spin' style='font-size:4rem;'></i></div>";
    if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp = new XMLHttpRequest();
    }else{
    // code for IE6, IE5
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function()
    {
    if (this.readyState == 4 && this.status == 200) {
    document.getElementById("videos-content").innerHTML = this.responseText;
    }
    };
    xmlhttp.open("GET","filter2.php?filter="+str1,true);
    xmlhttp.send();
}
function showModal() {
    document.getElementById("contact-modal").setAttribute("style", "display:flex;");
    document.getElementById("body").setAttribute("style", "overflow:hidden;");
}

function hideModal() {
    document.getElementById("contact-modal").setAttribute("style", "display:none;");
    document.getElementById("body").setAttribute("style", "overflow:show;");
    document.getElementById("contact-modal").innerHTML = "<div class='modal-background' onclick='hideModal()'></div><i class='fas fa-times' onclick='hideModal()'></i>";
}
function loadVideo(x) {
//    alert(x);
    document.getElementById("contact-modal").setAttribute("style", "display:flex;");
    document.getElementById("body").setAttribute("style", "overflow:hidden;");
    document.getElementById("contact-modal").innerHTML = "<div class='modal-background' onclick='hideModal()'></div><i class='fas fa-times' onclick='hideModal()'></i><iframe src='https://www.youtube.com/embed/"+x+"?autoplay=1'></iframe>";
}

</script>
<style>
    body{
/*        background-color:black;*/
        margin:0;
        font-family: 'Raleway', sans-serif;
        font-size: 0.01rem;
    }
    .banner{
/*        border:1px solid red;*/
        width:100%;
        height:450px;
        background-image: url("../images/learning/bg.jpg");
        display:flex;
        flex-wrap: wrap;
        align-items:center;
        justify-content: center;
        font-size:4rem;
        color:white;
    }
    .banner p{
/*        border:1px solid red;*/
        text-shadow: 0.2rem 0.2rem #000000;
        text-align:center;
    }
    .block1{
/*        border:1px solid black;*/
        width:100%;
        display:flex;
        flex-wrap:wrap;
    }
    .block1 .videos-header{
/*        border:2px solid red;*/
        background-color:#e5e5e5;
        width:100%;
        font-size:1.5rem;
        font-weight:600;
        padding-top:0.8rem;
        padding-bottom:0.8rem;
        padding-left:1.5rem;
        padding-right:1.5rem;
    }
    .dropdown{
        float:right;
        margin-right:3%;
/*        bordeR:2px solid black;*/
        width:100px;
    }
    .dropdown .btn{
        width:100px;
    }
    .videos-content{
/*        border:1px solid black;*/
        width:100%;
        padding-left:2%;
        padding-right:2%;
        padding-top:2rem;
        padding-bottom:4rem;
        display:flex;
        flex-wrap:wrap;
/*        justify-content: center;*/
    }
    .video-container{
        border:1px solid #c9c9c9;
        width:23%;
        display:flex;
        flex-wrap:wrap;
        padding:0.5rem;
        border-radius:2%;
        margin-left:1%;
        margin-right:1%;
        margin-top:2%;
    }
    .video-title{
        font-size:1rem;
        margin-top:0.5rem;
/*        border:2px solid black;*/
/*        padding-top:50px;*/
        border-top:1px solid rgba( 214, 214, 214, 0.894 );
        width:100%;
        height:3rem;
        color:#424242;
    }
    .video-thumbnail{
/*        border:2px solid black;*/
        display:flex;
        position:relative;
        width:100%;
        height:180px;
    }
    .video-hover{
        width:100%;
        height:100%;
        z-index:10;
/*        background-color:rgba( 109, 109, 109, 0.588 );*/
        position:absolute;
        display:flex;
        justify-content: center;
        align-items:center;
        color:rgba( 28, 28, 28, 0.9 );
        font-size:4rem;
    }
    .video-hover button{
        background-color:rgba( 255, 255, 255, 0 ) );
        border:0;
        outline: 0; 
    }
    .video-hover i:hover{
        cursor:pointer;
        color:#f16a21;
    }
</style>

<script type="text/javascript">
$(document).ready(function () {
    //Disable full page
    $("body").on("contextmenu",function(e){
        return false;
    });
    
    //Disable part of page
    $("#id").on("contextmenu",function(e){
        return false;
    });
});
</script>

<body oncontextmenu=”return false” class="noselect" id="body" onload="getVids('all');<?php echo (isset($_GET["play"])) ? "loadVideo('".$_GET["play"]."');" : ""; ?>">
    <div class="body-wrapper">
        <div class="body-container">
            <?php include "../header.php" ?>
            <div class="banner">
                <p>EDUCATIONAL VIDEOS</p>
            </div>
            <div class="block1">
                <div class="videos-header">Videos
                    <div class="dropdown">
                        <a class="btn dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filter</a>
<!--<img src="https://ytimg.googleusercontent.com/vi/u8Kt7fRa2Wc/default.jpg" alt="">-->
<!--                       <iframe width="560" height="315" src="https://www.youtube.com/embed/u8Kt7fRa2Wc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                        <div class="dropdown-menu dropdown-primary">
                            <button class="dropdown-item" value="all" onclick="getVids(this.value)">All</button>
                            <button class="dropdown-item" value="Hornbill" onclick="getVids(this.value)">Hornbill</button>
                            <button class="dropdown-item" value="Cherwell" onclick="getVids(this.value)">Cherwell</button>
                            <button class="dropdown-item" value="Ivanti" onclick="getVids(this.value)">Ivanti</button>
                            <button class="dropdown-item" value="Microfocus" onclick="getVids(this.value)">Microfocus</button>
                        </div>
                    </div>
                    <!--/Dropdown primary-->
                </div>
                <div class="videos-content" id="videos-content">
<!--
                   <div class="video-container">
                       <div class="video-thumbnail"><video class="card-img-top" width="100%" height="100%"><source src="videos/Cherwell/10.mp4" type="video/mp4"></video></div>
                       <div class="video-title">asdads</div>
                   </div>
-->
                    <?php
//                    foreach(recursive_scandir($dir) as $item){
//                        echo '<div class="video-container">';
//                        echo '<div class="video-thumbnail">
//                        <div class="video-hover"><i class="fas fa-play-circle"></i></div>
//                        <video class="card-img-top" width="100%" height="100%"><source src="'.$item.'" type="video/mp4"></video>
//                        </div>';
//                        echo '<div class="video-title">'.pathinfo($item)['filename'].'</div>';
//                        echo '</div>';
//                    }
                    ?>
                </div>
            </div>
            <?php include "../footer.php" ?>
        </div>
    </div>
</body>
</html>
<style>
    iframe{
        z-index:1000;
        height:100%;
        width:100%;
        border:0;
    }
    .contact-modal{
        height:100%;
        width:100%;
        position:fixed;
        z-index:1000;
/*        background-color:rgba( 0, 0, 0, 0.803);*/
/*        display:flex;*/
        display:none;
        justify-content: center;
        align-items:center;
        top:0;
/*        border:2px solid red;*/
    }
    .modal-background{
        width:100%;
        height:100%;
        background-color:rgba( 0, 0, 0, 0.803);
        position:absolute;
        z-index:1;
    }
    .contact-modal video{
        z-index:1000;
    }
    .contact-modal i{
        position:fixed;
        top:45%;
        right:1%;
        color:rgba( 188, 188, 188, 0.243 );
        font-size:2rem;
        z-index:1001;
    }
    .contact-modal i:hover{
        cursor:pointer;
        color:rgba( 204, 204, 204, 0.765 );
    }
</style>
<div class="contact-modal" id="contact-modal">
    <div class="modal-background" onclick="hideModal()"></div>
<!--
    <i class="fas fa-times" onclick="hideModal()"></i>
    <video controls><source src="./videos/Cherwell/001%20Course%20Introduction.mp4" type="video/mp4"></video>
-->
</div>
<?php include "../contactus/widgetv2.php" ?>
