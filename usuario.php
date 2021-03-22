<?php 
session_start();
// Comprobamos tenga sesion, si no entonces redirigimos y MATAMOS LA EJECUCION DE LA PAGINA.
if (isset($_SESSION['usuario'])) {
	try{
        $conexion = new PDO('mysql:host=localhost;dbname=bduv', 'root', '');
		
		$query = "SELECT Nombre,Taqui_Puntos FROM Cliente WHERE Email = :usuario";
		$statement = $conexion->prepare($query); // aqui meto la consulta sql
        $statement->execute(array(':usuario' => $usuario));//array es un metodo
        $resultado = $statement->fetch();// almacenar el resultado de la consultado

	}catch(PDOException $ex){
        echo "Error: {$ex->getMessage()}"; //interpolacion de variables 
    }
	require 'views/usuario.view.php';
} else {
	header('Location: login.php');
	die();
}
?>