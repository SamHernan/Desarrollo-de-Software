<?php 
    session_start();
    $mensaje="";

    if (isset($_POST['btnCarrito'])) {
        switch ($_POST['btnCarrito']) {
            case 'Agregar al carrito':
                // ID
                if (is_numeric( openssl_decrypt($_POST['productID'],COD,KEY))){
                    $ID=openssl_decrypt($_POST['productID'],COD,KEY);
                    // $name=$_POST['ProductoName'];
                    // $precio=$_POST['productPre'];
                    // $cantidad=$_POST['productPre'];
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
                    $NumeroProductos=count($_SESSION['CARRITO']);
                    $producto= array(
                        'id'=> $ID,
                        'nombre'=> $name,
                        'precio'=> $precio,
                        'cantidad'=> $cantidad
                    );
                    $_SESSION['CARRITO'][$NumeroProductos]=$producto;
                }
                $mensaje=print_r($_SESSION,true);
            break;
        }
    }
?>