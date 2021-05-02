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
<<<<<<< HEAD
    $id = $_SESSION['ID_C'];
=======
    $id = $_SESSION['Id'];
>>>>>>> fa81b269fcf24e1ea92ee14b2b639d21de8905fd
    $conexion = new PDO('mysql:host=localhost;dbname=bduv', 'root', ''); 
    $statement=$conexion->query("SELECT Id,CodigoPos,Colonia,TipoVialidad,NameVialidad,NumExterior,NumInterior FROM Direccion where Id_Cliente= '$id'");
}catch(PDOException $ex){
    $errores = '<li>¡Error: El servidor se encuentra en reparación. Intentelo mas tarde!</li>';

}
require 'views/vistaDireccion.view.php';
?>
