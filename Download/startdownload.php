<?php
$id = $_GET["file"];
$con = mysqli_connect('localhost','root','','serviceit_db');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con,"`dl_temps`");
$sql="select * from dl_temps where code='$id'";
$result = mysqli_query($con,$sql);
$count = mysqli_num_rows($result);
if($count==1){
    while($row = mysqli_fetch_array($result)) {
        $id = $row['link_id'];
        $exp = $row['expiry'];
    }
//    mysqli_close($con);
    $curr = time();
    if ($curr < $exp){
        mysqli_select_db($con,"`dl_links`");
        $sql="select * from dl_links where id='$id'";
        $result = mysqli_query($con,$sql);
        while($row = mysqli_fetch_array($result)) {
            echo "test";
            header('Location:'.$row['link'].$row['filename']);
        }    
    }else{
        echo "link expired";
    }
    
}else{
    echo "File does not exist";
}

?>