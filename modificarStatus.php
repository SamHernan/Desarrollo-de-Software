<?php

$post = (isset($_POST['id']) && !empty($_POST['id'])) &&
(isset($_POST['status']) && !empty($_POST['status']) &&
(isset($_POST['statusNew']) && !empty($_POST['statusNew'])));

if($post){
    $id = $_POST['id'];
    $status = $_POST['status'];
    $statusNew = $_POST['statusNew'];
    echo $id;
    echo $status;
    echo $statusNew;
    try{
        $conexion = new PDO('mysql:host=localhost;dbname=bduv', 'root', ''); //conexio a bd
        $statement = $conexion->prepare('UPDATE Pedido SET Status = :statusNew WHERE Id = :id');
        $statement->execute(array(':statusNew' => $statusNew,':id' => $id));    
        echo "Estatus Actualizado";
    }catch(PDOException $ex){
        echo 'error';
        //echo "Error: {$ex->getMessage()}"; //interpolacion de variables 
    }
}else{
    echo 'error';
}
?>


