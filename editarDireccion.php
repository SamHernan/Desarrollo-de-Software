<?php
$post = (isset($_POST['id']) && !empty($_POST['id'])) &&
(isset($_POST['codigoPostal']) && !empty($_POST['codigoPostal']) &&
(isset($_POST['colonia']) && !empty($_POST['colonia'])) &&
(isset($_POST['tipoVialidad']) && !empty($_POST['tipoVialidad']))&&
(isset($_POST['nombreVialidad']) && !empty($_POST['nombreVialidad']))&&
(isset($_POST['numeroExterior']) && !empty($_POST['numeroExterior'])));

if($post){
    $id = $_POST['id'];
    $cp = $_POST['codigoPostal'];
    $colonia = $_POST['colonia'];
    $vialidad = $_POST['tipoVialidad'];
    $nombreVia = $_POST['nombreVialidad'];
    $numE = $_POST['numeroExterior'];
    $numI = $_POST['numeroInterior'];
   try{
        $conexion = new PDO('mysql:host=localhost;dbname=bduv', 'root', ''); //conexio a bd
        $statement = $conexion->prepare('UPDATE Direccion SET CodigoPos = :cp, Colonia = :colonia, 
        TipoVialidad = :vialidad, NameVialidad = :nombreVia, NumExterior = :numE, NumInterior = :numI WHERE Id = :id');
        $statement->execute(array(':cp' => $cp,':colonia' => $colonia,':vialidad' => $vialidad,':nombreVia' => $nombreVia,
        ':numE' => $numE,':numI' => $numI,':id' => $id));    
        if($statement->execute()){
            echo 'realizado';
        }else{
            echo 'bd';
        }
    }catch(PDOException $ex){
        echo 'bd';
        //echo "Error: {$ex->getMessage()}"; //interpolacion de variables 
    }
}else{
    //echo '<li>¡Existen Campos Vacios!</li>';
    echo 'vacio';
}
?>