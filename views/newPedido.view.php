<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <div class="container">
    <br>
    <h1 class="text-center">Lista de Nuevos Pedidos</h1>
    <br>
        <table  class="table table-primary ">
        <thead>
		    <tr>
                <th class="table-dark text-center">Cliente</th>
			    <th class="table-dark text-center">Folio</th>
                <th class="table-dark text-center">Articulos</th>
			    <th class="table-dark text-center">Fecha</th>
			    <th class="table-dark text-center">Estatus</th>
                <th class="table-dark text-center">Detalles del Pedido</th>
                <th class="table-dark text-center">Modificar Estatus</th>
		    </tr>
	    </thead>
        <?php foreach ($statement as $row){?> 
        <tr>
            <td class="text-center"><?php echo $row['Nombre'] ?></td>
	        <td class="text-center"><?php echo $row['Id'] ?></td>
            <td class="text-center"><?php echo "lista pendiente" ?></td>
            <td class="text-center"><?php echo $row['Fecha'] ?></td>
            <td class="text-center estatus"><?php echo $row['Status'] ?></td>
            <td class="text-center"><button id="detalles" type="button" class="btn btn-info"> <img src = "../img/iconos/ojo.svg"/></button></td>
            <td class="text-center"><button id="<?php echo $row['Id'] ?>" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal"> <img src = "../img/iconos/pencil.svg"></button></td>
        </tr>
        <?php
	        }
        ?>
        </table>
    </div>

    <div class="modal" id="exampleModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                 <div class="modal-header">
                    <h5 class="modal-title">Actualización de Estatus</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body">
                    <span>El pedido con el Folio </span> <span id="modalId"></span>
                    <span>se encuentra en Pedido </span> <span id="modalStatus"></span>
                    <span>.¿Estás seguro de que quieres pasarlo a la siguiente etapa "Siguiente etapa"?</span> 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <button type="button"  id="RealizarCambios" class="btn btn-success">Realizar Cambios</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="errorModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                 <div class="modal-header">
                    <h5 class="modal-title">Error modal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body">
                    <span>Error</span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="../js/modalStatus.js"></script>
</body>
</html>