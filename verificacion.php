<?php 
    include 'includes/database.php';
    include 'carrito.php';
    $ClienteID='AXhghb6PuaPC8XZ8Dh5XqDEz897UKegnP4ndf3xZZPBpcxb4-suPeJF2OcV2q2cvCWOjGdXJlQ8nnRer';
    $Secret='EH9yHh6ws4CMm0DYsiH2NE1GTtL16-weCGxbXdxQawb3F4xvh370NbCuywR6MkVhO6-I0P8gyR3Nrf2_';

    $Login=curl_init("https://api.sandbox.paypal.com/v1/oauth2/token");
    curl_setopt($Login, CURLOPT_RETURNTRANSFER,TRUE);
    curl_setopt($Login,CURLOPT_USERPWD,$ClienteID.":".$Secret);
    curl_setopt($Login,CURLOPT_POSTFIELDS,"grant_type=client_credentials");
    $Respuesta=curl_exec($Login);
    
    $ObjRespuesta=json_decode($Respuesta);
    $AccessToken=$ObjRespuesta->access_token;
    // print_r($AccessToken);
    $venta=curl_init("https://api-m.sandbox.paypal.com/v1/payments/payment/".$_GET['paymentID']);

    curl_setopt($venta,CURLOPT_HTTPHEADER,array("Content-Type: application/json","Authorization: Bearer ".$AccessToken));
    curl_setopt($venta, CURLOPT_RETURNTRANSFER,TRUE);

    $RespuestaVenta=curl_exec($venta);
    // print_r($RespuestaVenta);

    $objDatosTransaccion=json_decode($RespuestaVenta);
    $state=$objDatosTransaccion->state;
    $custom=$objDatosTransaccion->transactions[0]->custom;
    print_r($custom);
    $clave=explode("#",$custom);
    $IdClienteVenta=$clave[0];
    $comentario=$clave[1];
    $taqui=$clave[2];

    if($state=="approved"){
        date_default_timezone_set('America/Mexico_City');
        $_SESSION['Pedido']['Fecha']=date('Y-m-d H:i:s');
        if($taqui=='yes'){
            $idC=$_SESSION['Pedido']['idCliente'];
            try{
                $consulta= "SELECT * FROM cliente Where Id= $idC";
                $consulta = @mysqli_query($db, $consulta);
                $productoC= [];
                $row= @mysqli_fetch_assoc($consulta);
                $productoC[0]['Taqui'] = $row['Taqui_Puntos'];
                $_SESSION['Pedido']['TotalPagar']=$_SESSION['Pedido']['TotalPagar']-$productoC[0]['Taqui'];
                $_SESSION['Taqui']=0;
    
                $sentencia2=$pdo->prepare("UPDATE `cliente` SET `Taqui_Puntos`= 0 WHERE `Id` =:Id;");
                $sentencia2->bindParam(":Id",$idC);
                $sentencia2->execute();
            }catch (Throwable $thr){
                include 'error.php';
                error_reporting(0);
            }
        }
        try {
            $sentencia=$pdo->prepare("INSERT INTO `pedido` (`Id`, `Total`, `Fecha`, `Status`, `MethodPago`, `Comentario`, `Calificacion`, `Id_Cliente`,`Direccion`, `Email_Trabajador`) 
                VALUES (NULL, :Total, :Fecha, 'Nuevo',:MethodPago,:Comentario,NULL,:Id_Cliente,:Direccion,'empleado_uv@gmail.com');");

    
            $sentencia->bindParam(":Total",number_format($_SESSION['Pedido']['TotalPagar'],2));
            $sentencia->bindParam(":Fecha",$_SESSION['Pedido']['Fecha']);
            $sentencia->bindParam(":Comentario", $comentario);
            $sentencia->bindParam(":MethodPago", $_SESSION['Pedido']['metPago']);
            $sentencia->bindParam(":Id_Cliente",number_format($_SESSION['Pedido']['idCliente']));
            $sentencia->bindParam(":Direccion",$_SESSION['Pedido']['Direccion']);
            
            $sentencia->execute();
            $lastID=$pdo->lastInsertId();
            foreach($_SESSION['CARRITO'] as $indice=>$producto){
                
                $sentencia=$pdo->prepare("INSERT INTO `contiene` (`Id_Pedido`, `Id_Producto`, `Cantidad`) 
                    VALUES (:Id_Pedido,:Id_Producto,:Cantidad);");
                $sentencia->bindParam(":Id_Pedido",$lastID);
                $sentencia->bindParam("Id_Producto",$producto['id']);
                $sentencia->bindParam(":Cantidad",$producto['cantidad']);
                $sentencia->execute();

                $proc=$producto['id'];

                $consulta= "SELECT * FROM producto Where Id= $proc";
                $consulta = @mysqli_query($db, $consulta);
                $productoC= [];
                $row= @mysqli_fetch_assoc($consulta);
                $productoC[0]['Existencia'] = $row['Existencia'];
                // UPDATE `producto` SET `Existencia`=91 WHERE `producto`.`Id` =2;
                $sentencia2=$pdo->prepare("UPDATE `producto` SET `Existencia`=:Existencia WHERE `Id` =:Id;");
                $new=$productoC[0]['Existencia']-$producto['cantidad'];
                $sentencia2->bindParam(":Existencia",$new);
                $sentencia2->bindParam(":Id",$producto['id']);
                $sentencia2->execute();
            }
            unset($_SESSION['CARRITO']);
            echo '<script type="text/javascript">
                    window.location.href="realizadoPay.php";
                </script>';
        } catch (Throwable $thr) {
            $error=$thr;
            echo '<script type="text/javascript">
                alert("Error al realizar pedido, trata de nuevo");
                window.location.href="index2.php";
            </script>';
            error_reporting(0);
        }
    }

?>