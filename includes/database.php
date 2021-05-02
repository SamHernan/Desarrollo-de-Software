<?php
define("KEY","tacos");
define("COD", "AES-128-ECB");

define("SERVIDOR","localhost");
define('USUARIO', 'root');
define('PASSWORD', '');
define('BD', 'bduv');

$servidor="mysql:dbname=".BD.";host=".SERVIDOR;
// $pdo;
try {
    $pdo = new PDO($servidor,USUARIO,PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
} catch (PDOException $e) {
    //throw $th;
}


$db= @mysqli_connect('localhost','root','','bduv');

if(!$db){
    //echo "Error en la conexión";
    include 'error.php';
    exit;
}