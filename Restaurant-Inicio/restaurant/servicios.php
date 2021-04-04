<?php

require 'includes/functions.php';
$x= 1;
// $servicios=readProducto($x);
// $servicios=readProducto($_GET('id'));
$servicios=obtenerServicios();

echo json_encode($servicios);