<?php
//    echo $_GET["file"];
//echo time() . "<br>" . gmdate('r', time()) . "<br>";
$id = "265cc9f8a3b6194e9dc8a773f4c44bb61fd93bf6";
//echo hash('ripemd160', time());
$con = mysqli_connect('localhost','root','','serviceit_db');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con,"`dl_links`");
$sql="select * from dl_links where id='$id'";
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result)) {
//    echo $row['id'] . "<br>";
//    echo $row['filename'] . "<br>";
//    echo $row['link'];
}
?>



<script>
function sendlink(){
        var id = document.getElementById("fileid").value;
        var email = document.getElementById("email").value;
        var params = "fileid="+id+"&email="+email;
        var http = new XMLHttpRequest();
        var url = "createTempLink.php";
//        var url = "inc/preview.php";
        http.open('POST', url, true);
        //Send the proper header information along with the request
        http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

        http.onreadystatechange = function() {//Call a function when the state changes.
            if(http.readyState == 4 && http.status == 200) {
                document.getElementById("result").innerHTML = http.responseText;
//                if(document.getElementById("result").textContent == "1"){
//                    window.location.replace("http://localhost:8081/serviceitplus/admin/");
//                }
            }
        }
        http.send(params);
//        alert("test");
    }
</script>
<input type="email" id="email">
<button onclick="sendlink()">generate</button>
<input type="text" id="fileid" hidden value="<?php echo $id ?>">
<div id="result"></div>

<!--<button>test</button>-->