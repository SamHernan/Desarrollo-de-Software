<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleado</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/main-style.css" rel="stylesheet" />
    <!-- Page-Level CSS -->
    <link href="assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />
   </head>
<body>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="empleado.php">
                    <img src="assets/img/logo.png" alt="" />
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- main dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="top-label label label-danger">3</span><i class="fa fa-envelope fa-3x"></i>
                    </a>
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="top-label label label-success">4</span>  <i class="fa fa-tasks fa-3x"></i>
                    </a>
                    
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="top-label label label-warning">5</span>  <i class="fa fa-bell fa-3x"></i>
                    </a>
                    
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-3x"></i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                        <li class="divider"></li>
                        <li><a href="login.php"><i class="fa fa-sign-out fa-fw"></i>Cerrar Sesión</a>
                        </li>
                    </ul>
                    <!-- end dropdown-user -->
                </li>
                <!-- end main dropdown -->
            </ul>
            <!-- end navbar-top-links -->

        </nav>
        <!-- end navbar top -->

        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section">
                            <div class="user-section-inner">
                                <img src="assets/img/user.png" alt="">
                            </div>
                            <div class="user-info">
                                <div>Erwin <strong>Smith</strong></div>
                                <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                    <li class="sidebar-search">
                        <!-- search section-->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <!--end search section-->
                    </li>
                    <li class="selected">
                        <a href="empleado.php"><i class="fa fa-dashboard fa-fw"></i>Inicio</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Pedidos<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="newPedido.php">Pedidos Nuevos/Preparación</a>
                            </li>
                            <li>
                                <a href="listoPedido.php">Pedidos Listos/Enviados</a>
                            </li>
                            <li>
                                <a href="entregadoPedido.php">Pedidos Entregados</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
  

                        <!-- second-level-items -->

                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->
        <!--  page-wrapper -->
        <div id="page-wrapper">

        <div class="container">
    <br>
    
    
    <h1 class="text-center">Lista de Pedidos Entregados</h1>
    <br>
    <div class="panel panel-default"> 
    <div class="panel-body"> 
    <div class="table-responsive"> 
    <table  class="table">
        <thead>
		    <tr>
                <th class="table-dark text-center">Cliente</th>
			    <th class="table-dark text-center">Folio</th>
			    <th class="table-dark text-center">Fecha</th>
			    <th class="table-dark text-center">Estatus</th>
                <th class="table-dark text-center">Ver Detalles</th>
		    </tr>
	    </thead>
        <?php foreach ($statement as $row){?> 
        <tr>
            <td class="text-center"><?php echo $row['Nombre'] ?></td>
	        <td class="text-center"><?php echo $row['Id'] ?></td>
            <td class="text-center"><?php echo $row['Fecha'] ?></td>
            <td class="text-center estatus"><?php echo $row['Status'] ?></td>
            <td class="text-center"><button id="openBtn" class="btn btn-info" data-toggle="modal" data-target="#modalDetallesPedido-<?php echo $row['Id']; ?>"> <img src = "img/iconos/ojo.svg"></button></td>

<!-- Modal -->
<?php
$link = new PDO('mysql:host=localhost;dbname=bduv', 'root', '');
?>

<div class="modal fade" id="modalDetallesPedido-<?php echo $row['Id']; ?>" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h3 class="modal-title">Detalles del Pedido</h3>
            </div>
            <div class="modal-body">
                <h4>Lista de Productos<h4>
            
                <?php foreach ($link->query('SELECT Pe.Id, PRO.NombreP, Con.Cantidad from Producto PRO, Contiene Con, Pedido Pe Where Pe.Id = Pe.Id and PRO.Id = Con.Id_Producto and Pe.Id = Con.Id_Pedido and Con.Id_Pedido = '.$row['Id']) as $row2){?>
                <h4>Producto: <?php echo $row2['NombreP'] ?>    Cantidad: <?php echo $row2['Cantidad'] ?><h4>

                <?php
                    }
                ?> 

                <h4>Metodo de Pago: <?php echo $row['MethodPago'] ?><h4>
                <h4>Total: <?php echo $row['Total'] ?><h4>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
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
    </div>   
    </div>   
    </div>
      

        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="assets/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/plugins/morris/morris.js"></script>
    <script src="assets/scripts/dashboard-demo.js"></script>

    <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="../js/modalStatus.js"></script>

</body>

</html>
