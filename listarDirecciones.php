<?php
session_start();
try{
    $id = $_SESSION['Id'];
    $conexion = new PDO('mysql:host=localhost;dbname=bduv', 'root', ''); 
    $statement=$conexion->query("SELECT Id,CodigoPos,Colonia,TipoVialidad,NameVialidad,NumExterior,NumInterior FROM Direccion where Id_Cliente= '$id'");
}catch(PDOException $ex){
    $errores = '<li>¡Error: El servidor se encuentra en reparación. Intentelo mas tarde!</li>';

}
require 'views/vistaDireccion.view.php';
?>
