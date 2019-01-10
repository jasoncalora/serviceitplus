<html>
<head>
    <title>News | Service IT+</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
<!--    <meta name="viewport" content="width=device-width, initial-scale=1">-->
    <meta name="author" content="SemiColonWeb" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="<?php echo get_bloginfo('siteurl')?>/wp-content/uploads/2018/11/favicons.png">  

	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() . '/js/header2.js' ?>"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() . '/js/bootstrap.min.js' ?>"></script>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/bootstrap.min.css' ?>" type="text/css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/animate.css' ?>" type="text/css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/header.css' ?>" type="text/css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/events.css' ?>" type="text/css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/aos.css' ?>" type="text/css">
</head>
<body>
<div class="body-wrapper">
<div class="body-container">
<?php
//    $url="/Website2017v2/";
if (strpos($_SERVER['PHP_SELF'], 'products') > 0) {
    $url = ".././/";
    $url2 = "http://".$_SERVER['HTTP_HOST'].str_replace("products/","",str_replace("index.php","",$_SERVER['PHP_SELF']));
}elseif (strpos($_SERVER['PHP_SELF'], 'about') > 0) {
    $url = ".././/";
    $url2 = "http://".$_SERVER['HTTP_HOST'].str_replace("about/","",str_replace("index.php","",$_SERVER['PHP_SELF']));
}elseif (strpos($_SERVER['PHP_SELF'], 'careers') > 0) {
    $url = ".././/";
    $url2 = "http://".$_SERVER['HTTP_HOST'].str_replace("careers/","",str_replace("index.php","",$_SERVER['PHP_SELF']));
}elseif (strpos($_SERVER['PHP_SELF'], 'events') > 0) {
    $url = ".././/";
    $url2 = "http://".$_SERVER['HTTP_HOST'].str_replace("events/","",str_replace("index.php","",$_SERVER['PHP_SELF']));
}else {
    $url = ".//";
    $url2 = "http://".$_SERVER['HTTP_HOST'].str_replace("index.php","",$_SERVER['PHP_SELF']);
}
?>

<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />
<div class="header noselect animated fadeInH">
	<div class="header-logo">
        <div class="menu-icon"><i class="fa fa-bars" aria-hidden="true" data-toggle="collapse" data-target="#dropdown-menu"></i></div>
		<img class="company-logo" src="<?php echo get_bloginfo('url'); ?>/wp-content/uploads/2018/11/SITlogo.png" alt="">
	</div>
<!--	 style="display:none;"-->
	<div class="header-navigation">
		<div class="nav-item"><a href="<?php echo $url2 ?>" class="">HOME</a></div>
		<div class="nav-item2"><a href="<?php echo $url2 ?>products/" class="">SOLUTIONS&nbsp;&nbsp;&  &nbsp;SERVICES</a></div>
<!--		<div class="nav-item"><a href="<?php echo $url2 ?>careers/" class="">CAREERS</a></div>-->
		<div class="nav-item"><a href="<?php echo get_bloginfo('url'); ?>" class="">NEWS</a></div>
		<div class="nav-item"><a href="<?php echo $url2 ?>about/" class="">ABOUT US</a></div>
	</div>	

</div>
	
	<div id="dropdown-menu" class="collapse">
	    <div class="header-avigation-small">
            <a href="<?php echo $url2 ?>">HOME</a>
            <a href="<?php echo $url2 ?>products/">SOLUTIONS&nbsp;&nbsp;&  &nbsp;SERVICES</a>
<!--            <a href="<?php echo $url2 ?>careers/">CAREERS</a>-->
            <a href="<?php echo get_bloginfo('url'); ?>">NEWS</a>
            <a href="<?php echo $url2 ?>about/">ABOUT US</a>
	    </div>
	</div>