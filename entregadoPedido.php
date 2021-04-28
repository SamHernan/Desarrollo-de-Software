<?php
try{
    $conexion = new PDO('mysql:host=localhost;dbname=bduv', 'root', ''); 
    $statement = $conexion->query('SELECT C.Nombre,Pe.Id,Pe.Fecha,Pe.Status from Cliente C, Pedido Pe Where C.Id = Pe.Id_Cliente  and Pe.Status = "Entregado"  ORDER BY Pe.Fecha DESC');        
}catch(PDOException $ex){
    $errores = '<li>¡Error: El servidor se encuentra en reparación. Intentelo mas tarde!</li>';
    //echo "Error: {$ex->getMessage()}"; //interpolacion de variables 
}
require 'views/entregadoPedido.view.php';
?>