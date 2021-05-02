<?php

    $servername = '127.0.0.1';
    $username = 'root';
    $password = '';
    $database = 'bduv';


    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Error " . $conn->connect_error);
    } else {
        echo "Connect success <br>";
}
?>