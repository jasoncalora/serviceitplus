<?php
if($_GET["filter"] == "all"){
    $dir = "videos/";
}elseif($_GET["filter"] == "cherwell"){
    $dir = "videos/Cherwell/";
}elseif($_GET["filter"] == "hornbill"){
    $dir = "videos/Hornbill/";
}elseif($_GET["filter"] == "ivanti"){
    $dir = "videos/Ivanti/";
}elseif($_GET["filter"] == "microfocus"){
    $dir = "videos/Microfocus/";
}

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
foreach(recursive_scandir($dir) as $item){
    echo '<div class="video-container">';
    echo '<div class="video-thumbnail">
    <div class="video-hover"><button onclick="loadVideo(this.value)" value="'.$item.'"><i class="fas fa-play-circle"></i></button></div>
    <video class="card-img-top" width="100%" height="100%"><source src="'.$item.'" type="video/mp4"></video>
    </div>';
    echo '<div class="video-title">'.pathinfo($item)['filename'].'</div>';
    echo '</div>';
    
//    echo '<div class="video-container">';
//    echo '<div class="video-thumbnail"><video class="card-img-top" width="100%" height="100%"><source src="'.$item.'" type="video/mp4"></video></div>';
//    echo '<div class="video-title">'.pathinfo($item)['filename'].'</div>';
//    echo '</div>';
}
?>