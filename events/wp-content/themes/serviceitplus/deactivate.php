<?php
$key = $_POST['primarykey'];
echo $key;
$host = 'localhost';
    $db   = 'sit_db';
    $user = 'root';
    $pass = '';
    $charset = 'utf8mb4';
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $count = 0;
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
    $stmt = $pdo->query('SELECT * FROM careers where ID = '.$key);
    while ($row = $stmt->fetch())
    {
        if($row['status']=='active'){
            $sql = "UPDATE careers SET status = 'inactive' WHERE id = ?";
        }else{
            $sql = "UPDATE careers SET status = 'active' WHERE id = ?";            
        }
        $pdo->prepare($sql)->execute([$key]);
    }
    header("Location: http://desktop-5ctqqt6:8081/serviceitplus/events/careersmgt/");
?>