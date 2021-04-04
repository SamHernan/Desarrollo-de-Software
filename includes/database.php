<?php
define("KEY","tacos");
define("COD", "AES-128-ECB");

$db= @mysqli_connect('127.0.0.1:3307','root','','bd-taco-uv');

if(!$db){
    //echo "Error en la conexión";
    include 'error.php';
    exit;
}