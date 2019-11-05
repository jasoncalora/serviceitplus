<?php
    $api_key = 'AIzaSyDw5qdJJMdpj_SEldpMgLNHNCryVfJv2yk';
    $api_url = 'https://www.googleapis.com/youtube/v3/videos?part=snippet%2CcontentDetails%2Cstatistics&id=' . $_GET["id"] . '&key=' . $api_key;
    $data = json_decode(file_get_contents($api_url));
    echo $data->items[0]->snippet->title;
?>