<?php
define("KEY","tacos");
define("COD", "AES-128-ECB");

$db= mysqli_connect('127.0.0.1:3307','root','','appsalon');

if(!$db){
    echo "Error la conexión";
    exit;
}