<!DOCTYPE html>
<html lang="es">
<?php
$id = $_SESSION['ID_C'];
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <!-- Core CSS - Include with every page -->
      <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <title>Mis Pedidos</title>
</head>
<body>
    <div class="container">
    <br>
        <a type="button"  class="btn btn-success" href="index2.php">Inicio</a>
        <br>
        <br>
        <h1 class="text-center">Mis Pedidos</h1>
        <!-- Button trigger modal -->
        <br>
        <br>
        <div class="panel panel-default"> 
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="table-dark text-center" scope="col">Folio</th>
                                <th class="table-dark text-center" scope="col">Fecha</th>
                                <th class="table-dark text-center" scope="col">Forma de Pago</th>
                                <th class="table-dark text-center" scope="col">Total</th>
                                <th class="table-dark text-center" scope="col">Estatus</th>
                                <th class="table-dark text-center" scope="col">Carrito</th>
                            </tr>
                        </thead>
                        <?php foreach ($statement as $row) {?>
                            <tr>
                                <td class="text-center"><?php echo $row['Id']?></td>
                                <td class="text-center"><?php echo $row['Fecha']?></td>
                                <td class="text-center"><?php echo $row['MethodPago']?></td>
                                <td class="text-center">$ <?php echo $row['Total']?></td>
                                <td class="text-center"><?php echo $row['Status']?></td>
                                <td class="text-center"><button id="openBtn" class="btn btn-primary" data-toggle="modal" data-target="#modalCarritoPedido-<?php echo $row['Id'];?>"> <img src = "img/iconos/carrito.svg"></button></td>
                            <!-- Modal -->
                            <?php
                                $link = new PDO('mysql:host=localhost;dbname=bduv', 'root', '');
                            ?>
                            <div class="modal fade" id="modalCarritoPedido-<?php echo $row['Id'];?>" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">X</button>
                                            <h3 class="modal-title">Folio del Pedido: <span style="font-weight:bolder"><?php echo $row['Id'];?></span></h3>
                                        </div>
                                        <div class="modal-body">
                                            <h4>Carrito:<h4>
                                            <?php foreach ($link->query('SELECT PRO.Nombre AS NombreP, Con.Cantidad from Producto PRO, Contiene Con, Pedido Pe Where PRO.Id = Con.Id_Producto and Pe.Id = Con.Id_Pedido and Con.Id_Pedido = '.$row['Id']) as $row2){?>
                                            <h4>Producto: <?php echo $row2['NombreP'] ?>  <br>  Cantidad: <?php echo $row2['Cantidad'] ?><h4>
                                            <?php
                                                }
                                            ?> 
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            </tr>
                        <?php
	                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- Core Scripts - Include with every page -->
</body>

</html>