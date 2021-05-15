<?php
session_start();
require "plantilla.php";

$post = (isset($_POST['fecha']) && !empty($_POST['fecha']));
if($post){
    //recupera fecha del input date 
    $fecha = $_POST['fecha'];

    $anio = date("Y");
    $mes = date("m");
    $dia = date("d");
    $dia_actual=$dia-1;
    $fecha_hoy = $anio."-".$mes."-".$dia_actual;

    if($fecha>$fecha_hoy){
        echo '<script language="javascript">alert("Porfavor seleccione una fecha valida");;window.location.href="reporte.php"</script>';
    }else{
        //echo "fecha aceptada";
        //echo "fecha del input".$fecha;
        try{
            $conexion = new PDO('mysql:host=localhost;dbname=bduv', 'root', '');
            $statement=$conexion->query("SELECT Id,MethodPago,Total FROM Pedido where DATE(Fecha) = DATE('$fecha')");
            $statement2=$conexion->query("SELECT SUM(Total) as Venta FROM Pedido where DATE(Fecha) = DATE('$fecha')");
            $pdf = new PDF("P","mm","letter");
            $pdf->AliasNbPages();
            $pdf->AddPage();
            //celda
            $pdf->setFont("Arial","B",10);
            $pdf->cell(50);
            
        
           $pdf->Cell(15,5,"Id",1,0,"C");
           $pdf->Cell(50,5,"Metodo de pago",1,0,"C");
           $pdf->Cell(40,5,"Total",1,1,"C");
            
           $pdf->setFont("Arial","",10);
           while($fila = $statement->fetch()){
                $pdf->cell(50);
                $pdf->Cell(15,5,$fila['Id'],1,0,"C");
                $pdf->Cell(50,5,$fila['MethodPago'],1,0,"C");
                $pdf->Cell(40,5,$fila['Total'],1,1,"C");
               
            }
            $pdf->cell(50);

            $pdf->Cell(65,5,"Venta Total",1,0,"C");
            while($fila2 = $statement2->fetch()){
                $pdf->Cell(40,5,$fila2['Venta'],1,0,"C");
            }

        
            $pdf->Output();
        
        
        }catch(PDOException $ex){
            echo '<script language="javascript">alert("¡Error: El servidor se encuentra en reparación. Intentelo mas tarde!");;window.location.href="reporte.php"</script>';
        }
    }
}else{
    echo '<script language="javascript">alert("Porfavor seleccione una fecha");;window.location.href="reporte.php"</script>';
}

?>