<?php
session_start();
if(isset($_SESSION['rol'])){
	header('location: login.php');
}
$errores='';
if($_SERVER['REQUEST_METHOD']=='POST'){

     $post = (isset($_POST['email']) && !empty($_POST['email'])) &&
     (isset($_POST['password']) && !empty($_POST['password'])) &&
     (isset($_POST['nombre']) && !empty($_POST['nombre'])) &&
     (isset($_POST['telefono']) && !empty($_POST['telefono']));
     
    if ($post) { // si todos estan llenos
        //obtener valores de los inputs
        $email = filter_var(strtolower($_POST['email']), FILTER_SANITIZE_EMAIL);
        $password = $_POST['password'];
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];

        try{
            $conexion = new PDO('mysql:host=localhost;dbname=bduv', 'root', '');//conexion a la bd
            //$statement = $conexion->prepare();
            $statement = $conexion->prepare('SELECT * FROM Cliente WHERE email = :email LIMIT 1'); //preparar la consulta a hacer
            $statement->execute(array(':email' => $email));
            // El metodo fetch nos va a devolver el resultado o false en caso de que no haya resultado.
            $resultado = $statement->fetch();
            if($resultado !== false){ // ya hay una tupla
                $errores = '<li>Usuario ya existente</li>'; // El punto sirve para concatenar
            }else{//si no existe el usuario empiezo a convertir la contraseña a hash
                # pero esto no asegura por completo la informacion encriptada.
                $password = hash('sha512', $password);// # de la informacion
                if($errores==''){//si no hay errores
                    $statement = $conexion->prepare('INSERT INTO Cliente (Id, Email, Password, Token, Nombre, Telefono, Taqui_Puntos) VALUES (null, :email, :password, null, :nombre, :telefono, 0)');
                    // Comprobamos si hay errores, sino entonces agregamos el usuario y redirigimos.
                    $statement->execute(array(
                        ':email' => $email,
                        ':password' => $password,
                        ':nombre' => $nombre,
                        ':telefono' => $telefono,
                    ));
                    // Despues de registrar al usuario redirigimos para que inicie sesion.
                    header('Location: login.php');
                }
            }
        }catch(PDOException $ex){
            echo "Error:{$ex->getMessage()}"; //por si no se puede conectar
            //$errores = '<li>¡Error: El servidor se encuentra en reparación. Intentelo mas tarde!</li>';
        }  
    }else{ // si hay alguno vacio
        $errores = '<li>¡Existen Campos Vacios!</li>';
    } 
}
require 'views/registrar.view.php';
?>