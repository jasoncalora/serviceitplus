<?php
    $api_key = 'AIzaSyDw5qdJJMdpj_SEldpMgLNHNCryVfJv2yk';
    $video_url = 'https://www.youtube.com/watch?v=OP5WPbcfIHQ';
    $api_url = 'https://www.googleapis.com/youtube/v3/videos?part=snippet%2CcontentDetails%2Cstatistics&id=' . getYouTubeVideoID($video_url) . '&key=' . $api_key;
    $data = json_decode(file_get_contents($api_url));
    echo '<strong>Title: </strong>' . $data->items[0]->snippet->title . '<br>';
?>