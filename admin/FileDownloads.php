
<?php echo "<style>"; include "../css/filedownloads.css"; echo "</style>";?>
<?php
$con = mysqli_connect('localhost','root','','serviceit_db');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con,"`dl_links`");
$sql="select * from dl_links";
$result = mysqli_query($con,$sql);
$count = 1;
?>
<div class="content-container">
    <div class="title-container"><div class="text">File Downloads</div></div>
    <div class="file-list">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">File Name</th>
<!--                    <th scope="col">File Link</th>-->
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>

<?php
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['filename']. "</td>";
//    echo "<td>" . $row['link'] . $row['filename'] . "</td>";
    echo "<td><button>Generate Link</button><button>Delete</button></td>";
    echo "</tr>";
}

mysqli_close($con);    
?>


            </tbody>
        </table>
    </div>
</div>