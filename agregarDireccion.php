<?php
$post = (isset($_POST['codigoPostal']) && !empty($_POST['codigoPostal']) &&
(isset($_POST['colonia']) && !empty($_POST['colonia'])) &&
(isset($_POST['tipoVialidad']) && !empty($_POST['tipoVialidad']))&&
(isset($_POST['nombreVialidad']) && !empty($_POST['nombreVialidad']))&&
(isset($_POST['numeroExterior']) && !empty($_POST['numeroExterior']))&&
(isset($_POST['idCliente']) && !empty($_POST['idCliente'])));

if($post){ //si estan llenos
    $codigoPos=$_POST['codigoPostal'];
    $colonia=$_POST['colonia'];
    $tipoVialidad=$_POST['tipoVialidad'];
    $nombreVialidad=$_POST['nombreVialidad'];
    $numeroEx=$_POST['numeroExterior'];
    $numeroIn=$_POST['numeroInterior'];
    $idCliente=$_POST['idCliente'];
    
        try{
            $conexion = new PDO('mysql:host=localhost;dbname=bduv', 'root', ''); 
            $statement=$conexion->prepare('INSERT INTO direccion (Id,CodigoPos,Colonia,TipoVialidad,NameVialidad,
            NumExterior,NumInterior,Id_Cliente) VALUES (null,:codigoPos,:colonia,:tipoVialidad,:nombreVialidad,
            :numeroEx,:numeroIn,:idCliente)');
            $statement->execute(array(
                ':codigoPos' => $codigoPos,
                ':colonia' => $colonia,
                ':tipoVialidad' => $tipoVialidad,
                ':nombreVialidad' => $nombreVialidad,
                ':numeroEx' => $numeroEx,
                ':numeroIn' => $numeroIn,
                ':idCliente' => $idCliente,
            ));
            echo 'realizado';
        }catch(PDOException $ex){
            echo 'bd';
        }
    }else{
        echo 'vacio';
    }
?>
