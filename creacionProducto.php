<?php
$errores='';

if($_SERVER['REQUEST_METHOD']=='POST'){

     $post = (isset($_POST['nombre']) && !empty($_POST['nombre'])) &&
     (isset($_POST['categoria']) && !empty($_POST['categoria'])) &&
     (isset($_POST['existencia']) && !empty($_POST['existencia'])) &&
     (isset($_POST['precio']) && !empty($_POST['precio'])) &&
     (isset($_POST['descripcion']) && !empty($_POST['descripcion']));

     
    if ($post) { // si todos estan llenos
        //obtener valores de los inputs
        $nombre = $_POST['nombre'];
        $categoria = $_POST['categoria'];
        $existencia = $_POST['existencia'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];
        $imagen = $_FILES['imagen']['name'];
        $destino="img_productos/".$_FILES["imagen"]["name"];
        //$ext = 'png';
        
        //$imagen = $_FILES['imagen']['name'];
        //$imagen2 = $_FILES['imagen']['type'];
        //$imagen3 = $imagen . $imagen2;

        //move_uploaded_file($_FILES['imagen']['tmp_name'], '/img_productos/' . $_FILES['imagen']['name']);
        // && move_uploaded_file($_FILES['imagen']['tmp_name'], $destino)        

        

        try{
            $conexion = new PDO('mysql:host=localhost;dbname=bduv', 'root', '');//conexion a la bd
            //$statement = $conexion->prepare();
            $statement = $conexion->prepare('SELECT * FROM Producto WHERE nombre = :nombre LIMIT 1'); //preparar la consulta a hacer
            $statement->execute(array(':nombre' => $nombre));
            // El metodo fetch nos va a devolver el resultado o false en caso de que no haya resultado.
            $resultado = $statement->fetch();
            if($resultado !== false){ // ya hay una tupla
                $errores = '<li>Producto ya existente</li>'; // El punto sirve para concatenar
            }else{//si no existe el usuario empiezo a convertir la contraseña a hash
                # pero esto no asegura por completo la informacion encriptada.
                //$password = hash('sha512', $password);// # de la informacion
                if($errores=='' && move_uploaded_file($_FILES['imagen']['tmp_name'], $destino)){//si no hay errores
                    $statement = $conexion->prepare('INSERT INTO Producto (Id, Nombre, Descripcion, Categoria, Precio, Existencia, Imagen) VALUES (null, :nombre, :descripcion, :categoria, :precio, :existencia, :imagen)');
                    // Comprobamos si hay errores, sino entonces agregamos el usuario y redirigimos.
                    $statement->execute(array(
                        ':nombre' => $nombre,
                        ':descripcion' => $descripcion,
                        ':categoria' => $categoria,
                        ':precio' => $precio,
                        ':existencia' => $existencia,
                        ':imagen' => $imagen,
                    ));
                    // Despues de registrar al usuario redirigimos para que inicie sesion.
                    header('Location: creacionProducto.php');
                    echo "Error: " . $_FILES["imagen"]["error"] . "<br />";
                }
            }
        }catch(PDOException $ex){
            //echo "Error:{$ex->getMessage()}"; //por si no se puede conectar
            $errores = '<li>¡Error: El servidor se encuentra en reparación. Intentelo mas tarde!</li>';
        }

    }else{ // si hay alguno vacio
        $errores = '<li>¡Existen Campos Vacios!</li>';
    } 
}
require 'views/creacionProducto.view.php';
?>