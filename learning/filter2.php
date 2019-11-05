<style>
    .videos-content{
        font-size:1.5rem;
    }
</style>
<script>
function getTitle() {
//    document.getElementById("videos-content").innerHTML = "<div style='width:100%;display:flex;justify-content:center;color:#f16a21;'><i class='fa fa-spinner fa-spin' style='font-size:4rem;'></i></div>";
//    var x = str1.id;
    alert("asdasd");
//    if (window.XMLHttpRequest) {
//    // code for IE7+, Firefox, Chrome, Opera, Safari
//    xmlhttp = new XMLHttpRequest();
//    }else{
//    // code for IE6, IE5
//    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
//    }
//    xmlhttp.onreadystatechange = function()
//    {
//    if (this.readyState == 4 && this.status == 200) {
//    document.getElementById("video-title").innerHTML = this.responseText;
//    }
//    };
//    xmlhttp.open("GET","gettitle.php?id="+str1,true);
//    xmlhttp.send();
}
</script>
<?php
    $filter = $_GET["filter"];
    $csvFile = file('video listing.csv');
    $data = [];
    foreach ($csvFile as $line) {
        $data[] = str_getcsv($line);
    }
    for($i=1;$i<=count($data)-1;$i++){
        if($filter == "all"){
            echo '<div class="video-container">';
            echo '<div class="video-thumbnail">
            <div class="video-hover"><button onclick="loadVideo(this.value)" value="'.$data[$i][1].'"><i class="fas fa-play-circle"></i></button></div>
            <img class="card-img-top" src="https://ytimg.googleusercontent.com/vi/'.$data[$i][1].'/mqdefault.jpg" alt="">
            </div>';
           // echo '<div class="video-title" id="'.$data[$i][1].'" onload="getTitle()"></div>';
            echo '<div class="video-title" id="video-title">'.getTitle2($data[$i][1]).'</div>';
            echo '</div>';
        }elseif($data[$i][0]==$filter){
            echo '<div class="video-container">';
            echo '<div class="video-thumbnail">
            <div class="video-hover"><button onclick="loadVideo(this.value)" value="'.$data[$i][1].'"><i class="fas fa-play-circle"></i></button></div>
            <img class="card-img-top" src="https://ytimg.googleusercontent.com/vi/'.$data[$i][1].'/mqdefault.jpg" alt="">
            </div>';
            echo '<div class="video-title" id="video-title">'.getTitle2($data[$i][1]).'</div>';
            echo '</div>';
        }
    }
function getTitle($id){
    $apikey = "AIzaSyDw5qdJJMdpj_SEldpMgLNHNCryVfJv2yk";
    $googleApiUrl = 'https://www.googleapis.com/youtube/v3/videos?id='. $id .'&key='.$apikey.'&part=snippet';
    $ch = curl_init();    
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_VERBOSE, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $response = curl_exec($ch);        
    curl_close($ch);        
    $data = json_decode($response);        
    $value = json_decode(json_encode($data), true);        
    $title = $value['items'][0]['snippet']['title'];
    return $title;
}
function getTitle2($id){
    $api_key = 'AIzaSyDw5qdJJMdpj_SEldpMgLNHNCryVfJv2yk';
    $api_url = 'https://www.googleapis.com/youtube/v3/videos?part=snippet%2CcontentDetails%2Cstatistics&id=' . $id . '&key=' . $api_key;
    $data = json_decode(file_get_contents($api_url));
//    alert($data->items[0]->snippet->title);
    return $data->items[0]->snippet->title;
}
function getTitle3($video_id){
    $url = "http://www.youtube.com/watch?v=".$video_id;

    $page = file_get_contents($url);
    $doc = new DOMDocument();
    $doc->loadHTML($page);

    $title_div = $doc->getElementById('eow-title');
    $title = $title_div->nodeValue;
    return $title;  
}
?>