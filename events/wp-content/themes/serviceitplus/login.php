<?php
/*
Template Name: careerslogin
*/
?>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    </head>
<style>
    .body{
        width:100%;
        height:100%;
    }
    .container{
/*        border:1px solid black;*/
        width:100%;
        height:100%;
        display:flex;
        justify-content:center;
        align-items:center;
    }
    .loginform{
        border:1px solid #afafaf;
        box-shadow: 2px 2px #888888;
        border-radius:2%;
        width:600px;
        height:400px;
        display:flex;
        flex-wrap: wrap;
        justify-content:center;
        align-items:center;
    } 
    .form-inner{
/*        border:2px solid red;*/
        width:60%;
        display:flex;
        flex-wrap:wrap;
        justify-content:center;
    }
    .form-inner img{
        width:100%;
    }
    .textbox{
        width:100%;
        margin-top:10px;
        border-radius:10px;
    }
    .btn{
/*        margin-top:1rem;*/
        width:40%;
/*        border:1px solid black;*/
    }
    label{
        color:red;
        font-size:0.8rem;
        width:100%;
/*        border:1px solid black;*/
/*        display:none;*/
        opacity:0;
    }
</style>
<?php
if(!empty($_POST['username'])) {
    $host = 'localhost';
    $db   = 'sit_db';
    $user = 'root';
    $pass = '';
    $charset = 'utf8mb4';
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $count = 0;
    $un = $_POST['username'];
    $pw = $_POST['password'];
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
//    $stmt = $pdo->query('SELECT * FROM careerslogin where username="'.$_POST['username'].'"');
//    echo 'SELECT * FROM careerslogin where username="'.$_POST['username'].'"';
    $stmt = $pdo->query('SELECT * FROM careerslogin where username="'.$un.'" and pword="'.$pw.'"');
    while ($row = $stmt->fetch())
    {
        session_start();
        $_SESSION['sessionOwner'] = $un;
        header("Location: http://desktop-5ctqqt6:8081/serviceitplus/events/careersmgt/", true);
        echo "user exists";
    }
    echo "<style>label{opacity:1;}</style>";
}   
?>
<body>
    <div class="container">
        <form class="loginform" action='http://desktop-5ctqqt6:8081/serviceitplus/events/login/' method='post' accept-charset='UTF-8'>
            <div class="form-inner">
                <img src="http://www.serviceitplus.com/events/wp-content/uploads/2018/11/SITlogo.png" alt="">
                <input type="text" class="form-control textbox" id="username" name="username" placeholder="username" required>
                <input type="password" class="form-control textbox" id="passsowrd" name="password" placeholder="password" required>
                <label for="">username or password incorrect</label>
                <input type="submit" name="submit" value="Login" class="btn btn-success">
            </div>
        </form>
    </div>
</body>
</html>