<?php
try{
    $conexion = new PDO('mysql:host=localhost;dbname=bduv', 'root', ''); 
    $statement = $conexion->query('SELECT  C.Nombre,Pe.Id,Pe.Fecha,Pe.Status,Pe.MethodPago,Pe.Total from Cliente C, Pedido Pe Where C.Id = Pe.Id_Cliente  and Pe.Status = "Listo" or C.Id = Pe.Id_Cliente and Pe.Status = "Enviado" ORDER BY Pe.Fecha DESC');        
}catch(PDOException $ex){
    $errores = '<li>¡Error: El servidor se encuentra en reparación. Intentelo mas tarde!</li>';
    //echo "Error: {$ex->getMessage()}"; //interpolacion de variables 
}
require 'views/listoPedido.view.php';
?>