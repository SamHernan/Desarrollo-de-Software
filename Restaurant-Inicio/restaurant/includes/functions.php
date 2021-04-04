<?php
function obtenerServicios(){

   try{
        require 'includes/database.php';

        $consulta = "SELECT * FROM servicios";
        $consulta = mysqli_query($db, $consulta);

        $servicios= [];
        $i = 0;
        while ($row = mysqli_fetch_assoc($consulta)) {
            $servicios[$i]['id'] = $row['id'];
            $servicios[$i]['nombre'] = $row['nombre'];
            $servicios[$i]['precio'] = $row['precio'];
            $i++;
        }

        return $servicios;
    }catch (Throwable $thr){
        var_dump($thr);  
    }
}

// obtenerServicios();

function readProducto($id){
    try {
        require 'includes/database.php';
        // session_start();
        // $idProducto = new NumberFormatter( $_GET['id'], NumberFormatter::TYPE_INT32);
        // $consulta= "SELECT * FROM clientes WHERE id=".$_GET['id'];
        // $consulta= "SELECT * FROM clientes WHERE id=".$idProducto;
        $consulta= "SELECT * FROM clientes where id=".$id;
        $consulta= mysqli_query($db, $consulta);

        $cliente=[];
        $row = mysqli_fetch_assoc($consulta);
        $cliente[0]['id']=$row['id'];
        $cliente[0]['nombre']=$row['nombre'];
        $cliente[0]['apellido']=$row['apellido'];

        return $cliente;
        //code...
    } catch (Throwable $th) {
        var_dump($thr);
    }
}