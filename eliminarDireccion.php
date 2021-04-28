<?php
$post = (isset($_POST['id']) && !empty($_POST['id']));

if($post){
    $id = $_POST['id'];
   try{
        $conexion = new PDO('mysql:host=localhost;dbname=bduv', 'root', ''); //conexio a bd
        $statement = $conexion->prepare('DELETE FROM direccion WHERE Id = :id');
        $statement->execute(array(':id' => $id));    
        if($statement->execute()){
            echo 'Eliminada';
        }else{
            echo 'bd';
        }
    }catch(PDOException $ex){
        echo 'bd';
        //echo "Error: {$ex->getMessage()}"; //interpolacion de variables 
    }
}
?>