<?php
session_start();
// Comprobamos si ya tiene una sesion jssjjsjs
# Si ya tiene una sesion redirigimos al contenido, para que no pueda volver acceder un usuario.
//if (isset($_SESSION['usuario'])) {//usuario de la sesion
  //  header('Location: principal.php');
   // die();
//}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Si todos los campos se han enviado, entonces, «$post» será «true»,
    // de lo contrario será «false»:
    $post = (isset($_POST['usuario']) && !empty($_POST['usuario'])) &&
    (isset($_POST['clave']) && !empty($_POST['clave']));
    
    if ($post) { // Si $post es true (verdadero), entonces se recuperaran los campos:
        //obtener valores de los inputs
        $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_EMAIL);//usuario del formulario
        $password = $_POST['clave'];
        $password = hash('sha512', $password);//tipo de encriptacion hash
        try{
            $conexion = new PDO('mysql:host=localhost;dbname=bduv', 'root', ''); //conexio a bd
            //verificar si existe el usuario
            $statement = $conexion->prepare('SELECT * FROM Cliente WHERE email = :usuario LIMIT 1'); 
            $statement->execute(array(':usuario' => $usuario));
            $resultado = $statement->fetch();
            if($resultado !== false){ // si existe el correo
                $query = "SELECT * FROM Cliente WHERE Email = :usuario AND Password = :clave";
                $statement = $conexion->prepare($query); // aqui meto la consulta sql
                $statement->execute(array(':usuario' => $usuario,':clave' => $password));//array es un metodo
                $resultado1 = $statement->fetch();// almacenar el resultado de la consultado
                if($resultado1 !== false){//si los datos existen y son correctos
                    $_SESSION['usuario'] = $usuario; //creo la sesion y lo mando a su pagina
                    header('location: usuario.php');
                }else{
                    $errores = '<li>¡Email y/o Password incorrectos!</li>';  
                }
            }else{
                //si no existe el correo en cliente voy a trabajador
                $statement = $conexion->prepare('SELECT Email FROM Trabajador WHERE email = :usuario LIMIT 1'); 
                $statement->execute(array(':usuario' => $usuario));
                $resultado2 = $statement->fetch();
                if($resultado2 !== false){//si existe el correo
                    $statement = $conexion->prepare('SELECT Rol FROM Trabajador WHERE Email = :usuario AND Password = :clave'); 
                    $statement->execute(array(':usuario' => $usuario,':clave' => $password));//array es un metodo
                    $resultado3 = $statement->fetch();
                    if($resultado3 !== false){// si existe ese email del trabajador checo que rol cumple
                        if($resultado3['Rol']=='admin'){// si su rol es admin, entonces ir a admin
                            $_SESSION['usuario'] = $usuario;
                            header('location: admin.php');
                        }else if($resultado3['Rol']== 'empleado'){//sino, si es empleado ir a empleado
                            $_SESSION['usuario'] = $usuario;
                            header('location: empleado.php');
                        }
                    }else{
                        $errores = '<li>¡Email y/o Password incorrectos!</li>';  
                    }
                }else{// no existe el correo en trabajador ni en cliente
                    $errores= '<li>¡Usuario no existente!</li>'; 
                }
            }        
        }catch(PDOException $ex){
            $errores = '<li>¡Error: El servidor se encuentra en reparación. Intentelo mas tarde!</li>';
            //echo "Error: {$ex->getMessage()}"; //interpolacion de variables 
        }
    }else{
        $errores = '<li>¡Existen Campos Vacios!</li>';
    }
}
require 'views/login.view.php';
?>