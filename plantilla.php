<?php
require 'fpdf/fpdf.php';

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    $anio = date("Y");
    $mes = date("m");
    $dia = date("d");
    $dia_actual=$dia-1;
    $fecha_hoy = $dia_actual."-".$mes."-".$anio;
    
    // Logo
    $this->Image("vendors/img/logo-inicio.png",10,10,25);
    // Arial bold 15
    $this->setFont("Arial","B",20);
    // Título
    $this->Cell(25);
    $this->Cell(140,5,"Reporte del dia de Pedidos",0,0,"C");
    //Fecha
    $this->setFont("Arial","",10);
    $this->Cell(25,5,"Fecha: ".$fecha_hoy,0,1,"C");
    // Salto de línea
    $this->Ln(20);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
}
}