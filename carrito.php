<?php 
    session_start();
    $mensaje="";

    if (isset($_POST['btnCarrito'])) {
        switch ($_POST['btnCarrito']) {
            case 'Agregar al carrito':
                // ID
                if (is_numeric( openssl_decrypt($_POST['productID'],COD,KEY))){
                    $ID=openssl_decrypt($_POST['productID'],COD,KEY);
                    $mensaje.='Id Correcto:'.$ID."<br>";
                }else{
                    $mensaje.='Id incorrecto:'.$ID."<br>";
                }

                // Nombre
                if (is_string(openssl_decrypt($_POST['ProductoName'],COD,KEY))) {
                    $name=openssl_decrypt($_POST['ProductoName'],COD,KEY);
                    $mensaje.='Nombre Correcto:'.$name."<br>";
                }else{
                    $mensaje.='Nombre incorrecto:'.$name."<br>";
                    break;
                }

                // Precio
                if (is_numeric(openssl_decrypt($_POST['productPre'],COD,KEY))) {
                    $precio=openssl_decrypt($_POST['productPre'],COD,KEY);
                    $mensaje.='Precio Correcto:'.$precio."<br>";
                }else{
                    $mensaje.='Precio incorrecto:'.$precio."<br>";
                    break;
                }

                // Cantidad

                if (is_numeric($_POST['cantidad'])){
                    $cantidad=$_POST['cantidad'];
                    $mensaje.='Cantidad Correcta:'.$cantidad."<br>";
                }else{
                    $mensaje.='Cantidad incorrecta:'.$cantidad."<br>";
                    break;
                }

                // Variable de sesión
                if (!isset($_SESSION['CARRITO'])) {
                    $producto= array(
                        'id'=> $ID,
                        'nombre'=> $name,
                        'precio'=> $precio,
                        'cantidad'=> $cantidad
                    );
                    $_SESSION['CARRITO'][0]=$producto;
                }else {

                    $idProductos=array_column($_SESSION['CARRITO'],"id");
                    // if (array_search($ID,$idProductos)) {
                    //     $_SESSION['CARRITO'][array_search($ID,$_SESSION['CARRITO'])]['cantidad']+$cantidad;
                    $encontrado=null;
                    if (in_array($ID,$idProductos)) {
                        $encontrado=array_search($ID,$idProductos);
                        $cant=$_SESSION['CARRITO'][$encontrado]['cantidad'];
                        $_SESSION['CARRITO'][$encontrado]['cantidad']=$cant+$cantidad;
                        echo "<script> alert('Producto repetido, se sumará cantidad'); </script>";

                    }else {
                        $NumeroProductos=count($_SESSION['CARRITO']);
                        $producto= array(
                            'id'=> $ID,
                            'nombre'=> $name,
                            'precio'=> $precio,
                            'cantidad'=> $cantidad
                        );
                        $_SESSION['CARRITO'][$NumeroProductos]=$producto;
                    }
                }
            
                echo'<script type="text/javascript">
                        alert("Producto Agregado al carrito");
                        window.location.href="index2.php";
                    </script>';
            break;

            case "Eliminar":
                if (is_numeric( openssl_decrypt($_POST['productID'],COD,KEY))){
                    $ID=openssl_decrypt($_POST['productID'],COD,KEY);
                    $mensaje.='Id Correcto:'.$ID."<br>";
                    foreach($_SESSION['CARRITO'] as $indice=>$producto){
                        if ($producto['id']==$ID) {
                            unset($_SESSION['CARRITO'][$indice]);
                            echo "<script> alert('Producto Eliminado...'); </script>";
                        }
                    }
                }else{
                    $mensaje.='Id incorrecto:'.$ID."<br>";
                }
            break;

            case "local":
                echo'<script type="text/javascript">
                        alert("Local");
                        window.location.href="entrega.php";
                    </script>';
            break;
        }
    }
?>