<?php
define("KEY","tacos");
define("COD", "AES-128-ECB");

$db= @mysqli_connect('localhost','root','','bduv');

if(!$db){
    //echo "Error en la conexión";
    include 'error.php';
    exit;
}