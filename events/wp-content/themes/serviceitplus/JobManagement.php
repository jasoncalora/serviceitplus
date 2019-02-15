<?php
/*
Template Name: JobManagement
*/
session_start();
//// remove all session variables
//session_unset(); 
//
//// destroy the session 
//session_destroy(); 
//echo $_SESSION['sessionOwner'];
if ($_SESSION['sessionOwner'] == '')
{
    header('Location: '.get_bloginfo('siteurl').'/login/');
}
?>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    </head>
<?php
//$host = 'dev.serviceitplus.com';
//$db   = 'events_wordpress';
//$user = 'dev';
//$pass = 'P@ssw0rd';
//$host = 'sitlivechat.x10host.com';
//$db   = 'sitlivec_serviceitplus';
//$user = 'sitlivec_sit1';
//$pass = 'P@ssw0rd';
$host = 'localhost';
$db   = 'sit_db';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';
$sales = 0;
$ops = 0;
$hr = 0;
    
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try {
     $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
?>
<script type="text/javascript">
    $(document).ready(function(){
        $('.application').submit(function() {
         $('#page-loader').show(); 
          return true;
        });
    }); ;
}
</script>
<body>
<div id="page-loader"><div class="loader-cont"><i class="fa fa-spinner fa-spin" style="font-size:6rem;color:#f16a21;"></i></div></div>
   <div class="wrapper">
       <div class="header">
           <div class="user">Welcome <kbd><?php echo $_SESSION['sessionOwner']; ?></kbd></div>
           <div class="menu"><a class="btn btn-secondary" href="<?php echo get_bloginfo('siteurl'); ?>/wp-content/themes/serviceitplus/logout.php">Log-out</a></div>
           <br><br>
       </div>
       <div class="body">   
          <table class="table">
            <?php
                $stmt = $pdo->query('SELECT * FROM careers ORDER BY department');
                while ($row = $stmt->fetch())
                {
//                    echo '<li data-toggle="modal" data-target="#myModal" onClick=test2("'.str_replace(" ","%",$row['job_title']).'","'.str_replace(" ","%",$row['html_desc']).'")><i class="fa-li fa fa-briefcase"></i>'.$row['job_title'].'</li>'; 
//                    echo '<tr><td></td></tr>';
                    echo '<td><form class="application" id="'.$row['ID'].'" action="'.get_bloginfo('siteurl').'/wp-content/themes/serviceitplus/deactivate.php" method="post" enctype="multipart/form-data">';
                    echo '<input type="text" style="display:none;" id="primarykey" name="primarykey" value="'.$row['ID'].'"">';
                    echo '</form></td>';    
                    echo '<td>'.$row['job_title'].'</td>';
                    echo '<td>'.$row['department'].'</td>';
                    echo '<td>'.$row['status'].'</td>';
                    if($row['status'] == 'active'){
                        $stat_btn = "Deactivate";
                        $class = "btn-danger";
                    }else{
                        $stat_btn = "Activate";
                        $class = "btn-success";
                    }
//                    echo '<td><button>'.$stat_btn.'</button></td>';
                    echo '<td><input type="Submit" form="'.$row['ID'].'" class="btn '.$class.'" value="'.$stat_btn.'" onClick="loader()"></td>';
                    echo '<td><button disabled title="Not yet Available">Delete</button></td>';
                    echo '<td><button disabled title="Not yet Available">Modify</button></td>';
                    echo '</tr>';
                }
            ?>
            <td colspan="7" style="text-align:right;paddin-right:2rem;">
                <a href="" class="btn btn-primary" disabled>Add Job</a>
            </td>
          </table>
           
       </div>
   </div>
    
    
</body>
</html>


<style>
    td{
/*        border:1px solid black;*/
        padding-left:40px;
        padding-right:40px;
        text-align:center;
    }
    
    .wrapper{
        width:100%;
/*        border:1px solid black;*/
        float:left;
    }
    .header{
/*        border:1px solid black;*/
        width:100%;
        float:left;
        padding-top:1rem;
    }
    .user{
        padding-left:1rem;
        float:left;
        font-size:1.2rem;
    }
    .menu{
        float:right;
        padding-right:1rem;
    }
    .body{
/*        border:1px solid black;*/
        float:left;
        width:100%;
    }
    
    #page-loader{
        width:100%;
        height:100%;
        z-index:99999;
        position:fixed;
        display:none;
        background-color:rgba( 0, 0, 0, 0.812 );
    }
    .loader-cont{
        width:100%;
        height:100%;
        display:-webkit-box;
        display:-ms-flexbox;
        display:flex;
        -webkit-box-pack:center;
        -ms-flex-pack:center;
        justify-content:center;
        -webkit-box-align:center;
        -ms-flex-align:center;
        align-items:center;
    }
</style>