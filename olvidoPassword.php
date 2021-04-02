<?php 
session_start();

if(isset($_POST['correo'])){
    $post = (isset($_POST['correo']) && !empty($_POST['correo']));
    if($post){//si tengo un correo en el campo, si esta lleno
        $email= filter_var(strtolower($_POST['correo']), FILTER_SANITIZE_EMAIL);//recupero valor del campo donde se introduce el correo
        try{
            $conexion = new PDO('mysql:host=localhost;dbname=bduv', 'root', '');
            $statement = $conexion->prepare('SELECT Id,Nombre FROM Cliente WHERE Email = :correo');
            $statement->execute(array(':correo' => $email));
            $resultado = $statement->fetch();
            if($resultado !== false){// si existe el correo
                //aqui vas a meter el codigo para mandar el correo, porque aqui encontro que si existe el que se introdujo
                $token = uniqid();
                $statement = $conexion->prepare('UPDATE Cliente SET Token = :token WHERE Email = :correo');
                $statement->execute(array(':token' => $token,':correo' => $email));
                $var_id = $resultado['Id'];

                $resetPassLink = 'http://localhost:3000/nuevaContrasena.php?id='.$var_id.'&token='.$token;

                //envio de correo 
                $email_to = $email;
                $email_subject = "Solicitud de Cambio de Contraseña";

                $email_message = 'Estimad@ '.$resultado['Nombre'].',
                <br/><br/>Recientemente se envió una solicitud para restablecer una contraseña para su cuenta. Si esto fue un error, simplemente ignore este correo electrónico y no pasará nada.
                <br/>Para restablecer su contraseña, visite el siguiente enlace: <a href="'.$resetPassLink.'">'.$resetPassLink.'</a>
                <br/><br/>Saludos,
                <br/>Atentamente
                <br/>Taco UV';

                //set content-type header for sending HTML email
                $headers = "MIME-Version: 1.0" . "\r\n";    
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                //additional headers
                $headers .= 'From: Taco UV<taco.uv.2021@gmail.com>' . "\r\n";
                //ahora se envía el email usando la funcion mail() de PHP
                @mail($email_to, $email_subject, $email_message, $headers);

                echo "Te hemos enviado un email para cambiar tu contraseña";

            }else{
                // en esta parte vas a mostrar que el correo no existe, que introduzca un correo valido o registrado 
                $errores = '<li>¡Por favor ingresa un correo valido!</li>';
            }

        }catch(PDOException $ex){
            $errores = '<li>¡Error: El servidor se encuentra en reparación. Intentelo mas tarde!</li>';
    
        }
    }else{
        $errores = '<li>¡Por favor ingresa un correo!</li>';
    }
}
require 'views/olvidoPassword.view.php';
?>