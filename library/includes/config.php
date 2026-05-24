<?php
error_reporting(0);
ini_set('display_errors', 0);

$host = getenv('MYSQLHOST');
$user = getenv('MYSQLUSER');
$pass = getenv('MYSQLPASSWORD');
$name = getenv('MYSQLDATABASE');
$port = getenv('MYSQLPORT') ?: '3306';



try {
    $dbh = new PDO(
        "mysql:host=$host;port=$port;dbname=$name",
        $user,
        $pass,
        [
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_TIMEOUT => 10
        ]
    );
} catch (PDOException $e) {
    exit("DB Error: " . $e->getMessage());
}
?>
