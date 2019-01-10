<?php
//    $url="/Website2017v2/";
if (strpos($_SERVER['PHP_SELF'], 'products') > 0) {
    $url = ".././/";
    $url2 = "http://".$_SERVER['HTTP_HOST'].str_replace("products/","",str_replace("index.php","",$_SERVER['PHP_SELF']));
}elseif (strpos($_SERVER['PHP_SELF'], 'events') > 0) {
    $url = ".././/";
    $url2 = "http://".$_SERVER['HTTP_HOST'].str_replace("events/","",str_replace("index.php","",$_SERVER['PHP_SELF']));
}elseif (strpos($_SERVER['PHP_SELF'], 'about') > 0) {
    $url = ".././/";
    $url2 = "http://".$_SERVER['HTTP_HOST'].str_replace("about/","",str_replace("index.php","",$_SERVER['PHP_SELF']));
}else {
    $url = ".//";
    $url2 = "http://".$_SERVER['HTTP_HOST'].str_replace("index.php","",$_SERVER['PHP_SELF']);
}
?>

<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />
<div class="header noselect animated fadeInH">
	<div class="header-logo">
        <div class="menu-icon"><i class="fa fa-bars" aria-hidden="true" data-toggle="collapse" data-target="#dropdown-menu"></i></div>
		<img class="company-logo" src="<?php echo $url ?>images/header/SITlogo.png" alt="">
	</div>
<!--	 style="display:none;"-->
	<div class="header-navigation">
		<div class="nav-item"><a href="<?php echo $url2 ?>" class="">HOME</a></div>
		<div class="nav-item2"><a href="<?php echo $url2 ?>products/" class="">SOLUTIONS&nbsp;&nbsp;&  &nbsp;SERVICES</a></div>
		<div class="nav-item2"><a href="<?php echo $url2 ?>events/" class="">NEWS</a></div>
		<div class="nav-item"><a href="<?php echo $url2 ?>about/" class="">ABOUT US</a></div>
	</div>	

</div>
	
	<div id="dropdown-menu" class="collapse">
	    <div class="header-avigation-small">
            <a href="<?php echo $url2 ?>">HOME</a>
            <a href="<?php echo $url2 ?>products/">SOLUTIONS&nbsp;&nbsp;&nbsp;SERVICES</a>
            <a href="<?php echo $url2 ?>products/">NEWS</a>
            <a href="<?php echo $url2 ?>about/">ABOUT US</a>
	    </div>
	</div>

<!----------------------   FONT JAVASCRIPT   ---------------------->

