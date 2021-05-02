<!DOCTYPE html>
<html lang="es">
<?php
$id = $_SESSION['ID_C'];
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" 
    crossorigin="anonymous"></script>

    <title>Gestionar Direcciones</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Mis Direcciones</h1>
        <!-- Button trigger modal -->
        <a type="button"  class="btn btn-success" href="index2.php">Home</a>
        <button type="button"  id="agregarDi" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#agregar">
        Agregar Dirección
        </button>
        
        <br>
        <br>
        <div class="panel panel-default"> 

        <div class="panel-body">
        <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th class="text-center" scope="col">Folio</th>
                    <th class="text-center" scope="col">Codigo Postal</th>
                    <th class="text-center" scope="col">Colonia</th>
                    <th class="text-center" scope="col">Tipo de vialidad</th>
                    <th class="text-center" scope="col">Nombre de Vialidad</th>
                    <th class="text-center" scope="col">Numero Exterior</th>
                    <th class="text-center" scope="col">Numero Interior</th>
                    <th class="text-center" scope="col">Editar</th>
                    <th class="text-center" scope="col">Eliminar</th>
                </tr>
            </thead>
                <?php foreach ($statement as $row) {?>
                    <tr>
                        <td class="text-center"><?php echo $row['Id']?></td>
                        <td class="text-center postal"><?php echo $row['CodigoPos']?></td>
                        <td class="text-center colon"><?php echo $row['Colonia']?></td>
                        <td class="text-center tiVi"><?php echo $row['TipoVialidad']?></td>
                        <td class="text-center naVia"><?php echo $row['NameVialidad']?></td>
                        <td class="text-center numeExt"><?php echo $row['NumExterior']?></td>
                        <td class="text-center numeInt"><?php echo $row['NumInterior']?></td>
                        <td><button id="<?php echo $row['Id']?>" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editar">
                        Editar
                        </button></td>
                        <td><button id="<?php echo $row['Id']?>" class="btn btn-danger" data-toggle="modal" data-target="#eliminar">
                        Eliminar
                        </button></td>
                    </tr>
                <?php }?>
        </table>
        </div>
        </div>
        </div>
    </div>
    <!-- Modal agregar direccion-->
    <div class="modal fade" id="agregar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nueva Dirección</h5>
                    <input type="hidden" id="idCliente" value='<?= $id ?>'/>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <!--Formulario-->
                <form>
                <div class="form-group">
                    <label for="">Código Postal</label>
                    <input type="number" id="codigoPos" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Colonia</label>
                    <input type="text" id="colonia" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Tipo de Vialidad</label>
                    <select id="tipoVialidad" class="form-control">
                    <option value="">Selecciona una opción</option>
                    <option value="Calle">Calle</option>
                    <option value="Andador">Andador</option>
                    <option value="Avenida">Avenida</option>
                    <option value="Privada">Privada</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Nombre de Vialidad</label>
                    <input type="text" id="nombreVialidad" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Número Exterior</label>
                    <input type="number" id="numeroEx" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Número Interior</label>
                    <input type="number" id="numeroIn" class="form-control">
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" id="addDir" class="btn btn-primary">Guardar Cambios</button>
                </div>
                </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal editar direccion-->
    <div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar Dirección</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <!--Formulario-->
                <span>Folio: </span> <span id="muestroId"></span>
                <div class="form-group">
                    <label for="">Código Postal</label>
                    <input type="number" id="coPos" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Colonia</label>
                    <input type="text" id="col" class="form-control">
                </div>

                <div class="form-group">
                <label for="">Tipo de Vialidad</label><br>
                    <select id="tipoVialidad2" class="form-control">
                        <option value="">Selecciona una opción</option>
                        <option value="Calle">Calle</option>
                         <option value="Andador">Andador</option>
                        <option value="Avenida">Avenida</option>
                        <option value="Privada">Privada</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Nombre de Vialidad</label>
                    <input type="text" id="nomVi" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Número Exterior</label>
                    <input type="number" id="numEx" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Número Interior</label>
                    <input type="number" id="numIn" class="form-control">
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" id="guardarCambios" class="btn btn-primary">Guardar Cambios</button>
                    <!--input type="submit" value="Enviar" class="btn btn-primary" /-->
                </div>
                </form>
                </div>
            </div>
        </div>
    </div>
    <!--Modal Eliminar-->
    <div class="modal" id="eliminar" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Eliminar Direccion</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <span>¿Estas seguro de que quieres eliminar la siguiente direccion?</span> 
                <span style="font-weight:bolder">Folio: </span> <span id="muestroId2"></span><br>
                <span style="font-weight:bolder">Codigo Postal: </span> <span id="muestroCP"></span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" id="delete" class="btn btn-primary">Guardar Cambios</button>
                </div>
            </div>
        </div>
    </div>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="../js/modalEditar.js"></script>
    <script src="../js/modalBorrar.js"></script>
    <script src="../js/modalAgregar.js"></script>
    <!-- Core Scripts - Include with every page -->
</body>

</html>