<?php
session_start();
if(!isset($_SESSION['rol'])){
	header('location: login.php');
}else{
	if($_SESSION['rol'] !=3){
		header('location: login.php');
	}
}
try{
    $id = $_SESSION['ID_C'];
    $conexion = new PDO('mysql:host=localhost;dbname=bduv', 'root', ''); 
    $statement=$conexion->query("SELECT Id,Fecha,MethodPago,Total,Status FROM Pedido where Id_Cliente= '$id'");
}catch(PDOException $ex){
    $errores = '<li>¡Error: El servidor se encuentra en reparación. Intentelo mas tarde!</li>';

}
require 'views/pedidoCliente.view.php';
?>
