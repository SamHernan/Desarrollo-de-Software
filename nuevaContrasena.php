<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $obten_id = $_POST['id'];
    $obten_token = $_POST['token'];
    $post = (isset($_POST['contraseña1']) && !empty($_POST['contraseña1'])) &&
    (isset($_POST['contraseña2']) && !empty($_POST['contraseña2'])) &&
    (isset($_POST['id']) && !empty($_POST['id'])) && (isset($_POST['token']) && !empty($_POST['token']));
    if($post){//si estan llenos
        if($_POST["contraseña1"]== $_POST["contraseña2"]){
            # son iguales
            try{
                $cont = $_POST['contraseña1'];
                $cont_conver = hash('sha512', $cont);//tipo de encriptacion hash
                $conexion = new PDO('mysql:host=localhost;dbname=bduv', 'root', '');
                $statement = $conexion->prepare('UPDATE Cliente SET Password = :cont_conver WHERE Id = :obten_id');
                $statement->execute(array(':cont_conver' => $cont_conver,':obten_id' => $obten_id)); 
                $resultado = $statement->fetch();
                $nuevo_token = NULL;
                $statement2 = $conexion->prepare('UPDATE Cliente SET Token = :nuevo_token WHERE Id = :obten_id');
                $statement2->execute(array(':nuevo_token' => $nuevo_token,':obten_id' => $obten_id)); 
                $resultado2 = $statement2->fetch();
                $exito = '<li>¡Cambio realizado exitosamente!</li>';
            }catch(PDOException $ex){
                $errores = '<li>¡Error: El servidor se encuentra en reparación. Intentelo mas tarde!</li>';
            }
        }else{
            # no son iguales
            $errores = '<li>¡Las contraseñas ingresadas no coinciden!</li>'; 
        }
    }else{
        $errores = '<li>¡Los campos de contraseña estan vacíos!</li>';
    }
}

require 'views/nuevaContrasena.view.php';
?>