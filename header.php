<?php
//    $url="/Website2017v2/";
if (strpos($_SERVER['PHP_SELF'], 'products') > 0) {
    $url = ".././/";
    $url2 = "http://".$_SERVER['HTTP_HOST'].str_replace("products/","",str_replace("index.php","",$_SERVER['PHP_SELF']));
}elseif (strpos($_SERVER['PHP_SELF'], 'solutionsandservices') > 0) {
    $url = ".././/";
    $url2 = "http://".$_SERVER['HTTP_HOST'].str_replace("solutionsandservices/","",str_replace("index.php","",$_SERVER['PHP_SELF']));
}elseif (strpos($_SERVER['PHP_SELF'], 'solutionsandservices') > 0) {
    $url = ".././/";
    $url2 = "http://".$_SERVER['HTTP_HOST'].str_replace("events/","",str_replace("index.php","",$_SERVER['PHP_SELF']));
}elseif (strpos($_SERVER['PHP_SELF'], 'about') > 0) {
    $url = ".././/";
    $url2 = "http://".$_SERVER['HTTP_HOST'].str_replace("about/","",str_replace("index.php","",$_SERVER['PHP_SELF']));
}elseif (strpos($_SERVER['PHP_SELF'], 'careers') > 0) {
    $url = ".././/";
    $url2 = "http://".$_SERVER['HTTP_HOST'].str_replace("careers/","",str_replace("index.php","",$_SERVER['PHP_SELF']));
}elseif (strpos($_SERVER['PHP_SELF'], 'learning') > 0) {
    $url = ".././/";
    $url2 = "http://".$_SERVER['HTTP_HOST'].str_replace("learning/","",str_replace("index.php","",$_SERVER['PHP_SELF']));
}elseif (strpos($_SERVER['PHP_SELF'], 'services') > 0) {
    $url = ".././/";
    $url2 = "http://".$_SERVER['HTTP_HOST'].str_replace("services/","",str_replace("index.php","",$_SERVER['PHP_SELF']));
    $url2 = str_replace("product-services.php","",$url2);
    $url2 = str_replace("product-consulting.php","",$url2);
    $url2 = str_replace("Managed-Services.php","",$url2);
//    $url2 = $url2.str_replace("services/","",str_replace("product-services.php","",$url2)); solutionsandservices
//    $url2 = "http://".$_SERVER['HTTP_HOST'].str_replace("services/","",str_replace("index.php","",$_SERVER['PHP_SELF']));
}elseif (strpos($_SERVER['PHP_SELF'], 'it-service-management') > 0) {
    $url = ".././/";
    $url2 = "http://".$_SERVER['HTTP_HOST'].str_replace("it-service-management/","",str_replace("index.php","",$_SERVER['PHP_SELF']));
}elseif (strpos($_SERVER['PHP_SELF'], 'endpoint-security') > 0) {
    $url = ".././/";
    $url2 = "http://".$_SERVER['HTTP_HOST'].str_replace("endpoint-security/","",str_replace("index.php","",$_SERVER['PHP_SELF']));
}elseif (strpos($_SERVER['PHP_SELF'], 'endpoint-management') > 0) {
    $url = ".././/";
    $url2 = "http://".$_SERVER['HTTP_HOST'].str_replace("endpoint-management/","",str_replace("index.php","",$_SERVER['PHP_SELF']));
}elseif (strpos($_SERVER['PHP_SELF'], 'identity-access-management') > 0) {
    $url = ".././/";
    $url2 = "http://".$_SERVER['HTTP_HOST'].str_replace("identity-access-management/","",str_replace("index.php","",$_SERVER['PHP_SELF']));
}elseif (strpos($_SERVER['PHP_SELF'], 'it-governance') > 0) {
    $url = ".././/";
    $url2 = "http://".$_SERVER['HTTP_HOST'].str_replace("it-governance/","",str_replace("index.php","",$_SERVER['PHP_SELF']));
}elseif (strpos($_SERVER['PHP_SELF'], 'security') > 0) {
    $url = ".././/";
    $url2 = "http://".$_SERVER['HTTP_HOST'].str_replace("security/","",str_replace("index.php","",$_SERVER['PHP_SELF']));
}elseif (strpos($_SERVER['PHP_SELF'], 'assetmanagement') > 0) {
    $url = ".././/";
    $url2 = "http://".$_SERVER['HTTP_HOST'].str_replace("assetmanagement/","",str_replace("index.php","",$_SERVER['PHP_SELF']));
}elseif (strpos($_SERVER['PHP_SELF'], 'iam') > 0) {
    $url = ".././/";
    $url2 = "http://".$_SERVER['HTTP_HOST'].str_replace("iam/","",str_replace("index.php","",$_SERVER['PHP_SELF']));
}else {
    $url = ".//";
    $url2 = "http://".$_SERVER['HTTP_HOST'].str_replace("index.php","",$_SERVER['PHP_SELF']);
}
?>

<!--<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />-->
<div class="header noselect animated fadeInH">
	<div class="header-logo"> 
        <div class="menu-icon"><i class="fa fa-bars" aria-hidden="true" data-toggle="collapse" data-target="#dropdown-menu"></i></div>
		<img class="company-logo" src="<?php echo $url ?>images/header/SITlogo.png" alt="">
	</div>
<!--	 style="display:none;"-->
	<div class="header-navigation">
		<div class="nav-item"><a href="<?php echo $url2 ?>" class="">HOME</a></div>
		<div class="nav-item2"><a href="<?php echo $url2 ?>solutionsandservices/" class="">SOLUTIONS & SERVICES</a></div>
<!--		<div class="nav-item2"><a href="<?php echo $url2 ?>services/" class="">SERVICES</a></div>-->
<!--		<div class="nav-item2"><a href="<?php echo $url2 ?>careers/" class="">CAREERS</a></div>-->
<!--		<div class="nav-item2"><a href="<?php echo $url2 ?>events/" class="">NEWS</a></div>-->
		<div class="nav-item"><a href="<?php echo $url2 ?>about/" class="">ABOUT US</a></div>
	</div>	

</div>
	
	<div id="dropdown-menu" class="hidden">
	    <div class="header-avigation-small">
            <a href="<?php echo $url2 ?>">HOME</a>
            <a href="<?php echo $url2 ?>solutionsandservices/">SOLUTIONS & SERVICES</a>
<!--            <a href="<?php echo $url2 ?>services/">SERVICES</a>-->
<!--            <a href="<?php echo $url2 ?>careers/">CAREERS</a>-->
<!--            <a href="<?php echo $url2 ?>products/">NEWS</a>-->
            <a href="<?php echo $url2 ?>about/">ABOUT US</a>
	    </div>
	</div>
<style>
    .hidden{
        display:none;
    }
</style>
<!----------------------   FONT JAVASCRIPT   ---------------------->

