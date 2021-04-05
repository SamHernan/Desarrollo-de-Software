<!DOCTYPE html>
<html>

<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Administrador Taco UV</title>

	<!-- Site favicon -->
	<link rel="icon" type="image/png" sizes="32x32" href="vendors/img/icono-taco.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
		rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">
	

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() { dataLayer.push(arguments); }
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<!-- IMAGEN DE CARGA DE PAGINA -->

<body>
	<div class="pre-loader">
		<div class="pre-loader-box">
			<!--<div class="loader-logo"><img src="vendors/img/login.gif" alt=""></div>
			<div class='loader-progress' id="progress_div">
				<div class='bar' id='bar1'></div>
			</div>
			<div class='percent' id='percent1'>90%</div>
			<div class="loading-text">
				Cargando...
			</div>-->
		</div>
	</div>

	<!-- PARTE SUPERIOR -->
	<div class="header">
		<div class="header-left">
			<div class="menu-icon dw dw-menu"></div>
			<div class="search-toggle-icon dw dw-search2" data-toggle="header_search"></div>
			<div class="header-search">
				<form>
					<div class="form-group mb-0">
						<i class="dw dw-search2 search-icon"></i>
						<input type="text" class="form-control search-input" placeholder="Search Here">
						<div class="dropdown">
							<a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
								<i class="ion-arrow-down-c"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">From</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">To</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">Subject</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text">
									</div>
								</div>
								<div class="text-right">
									<button class="btn btn-primary">Buscar</button>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="header-right">
			<div class="dashboard-setting user-notification">
				<div class="dropdown">
					<a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
						<i class="dw dw-settings2"></i>
					</a>
				</div>
			</div>
			<div class="user-notification">
				<div class="dropdown">
					<a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
						<i class="icon-copy dw dw-notification"></i>
						<span class="badge notification-active"></span>
					</a>

				</div>
			</div>
			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						<span class="user-icon">
							<img src="vendors/img/admin.png" alt="">
						</span>
						<span class="user-name">Administrador:</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
						<a class="dropdown-item" href="profile.html"><i class="dw dw-user1"></i> Profile</a>
						<a class="dropdown-item" href="profile.html"><i class="dw dw-settings2"></i> Setting</a>
						<a class="dropdown-item" href="faq.html"><i class="dw dw-help"></i> Help</a>
						<a class="dropdown-item" href="login.html"><i class="dw dw-logout"></i> Log Out</a>
					</div>
				</div>
			</div>
			<div class="github-link">
				<a href="https://github.com/dropways/deskapp" target="_blank"><img src="vendors/images/github.svg"
						alt=""></a>
			</div>
		</div>
	</div>


	<div class="left-side-bar">
		<div class="brand-logo">

			<a href="index.html">

				<img src="vendors/img/logo-inicio.png" alt="" class="dark-logo">
				<img src="vendors/img/logo-inicio.png" alt="" class="light-logo">
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
					<li>
						<div class="dropdown-divider"></div>
					</li>
					<li>
						<a href="index.html" class="dropdown-toggle">
							<span class="micon dw dw-house-1"></span><span class="mtext">Inicio</span>
						</a>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-library"></span><span class="mtext">Productos </span>
						</a>
						<ul class="submenu">
							<li><a href="basic-table.html">Productos Existentes</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-analytics-21"></span><span class="mtext">Consumo Producto</span>
						</a>
						<ul class="submenu">
							<li><a href="highchart.html">Más Consumidos</a></li>
							<li><a href="knob-chart.html">Menos Consumidos</a></li>
							<li><a href="jvectormap.html">Consumo Total</a></li>
						</ul>
					<li>
						<a href="invoice.html" class="dropdown-toggle">
							<span class="micon dw dw-invoice"></span><span class="mtext">Reporte de Ventas</span>
						</a>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-edit2"></span><span class="mtext">Formatos </span>
						</a>
						<ul class="submenu">
							<li><a href="form-basic.html"> Almacen Actual</a></li>
							<li><a href="advanced-components.html">Ventas Obtenidas</a></li>
							<li><a href="form-wizard.html">Ganancias</a></li>
						</ul>
					</li>
					<li>
						<a href="index.html" class="dropdown-toggle">
							<span class="micon dw dw-chat3"></span><span class="mtext">Notificaciones</span>
						</a>
					</li>
					<li>
						<div class="dropdown-divider"></div>
					</li>

				</ul>
			</div>
		</div>
	</div>
	
	
	<div class="mobile-menu-overlay"></div>
    <div class="main-container">
		<div class="pd-ltr-20">
			<div class="page-header">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<nav aria-label="breadcrumb" role="navigation">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
								<li class="breadcrumb-item active" aria-current="page">Productos Almacen</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<div id="chart"></div>
							</div>
							<div class="widget-data">
								<div class="h4 mb-0">2020</div>
								<div class="weight-600 font-14">Contact</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<div id="chart2"></div>
							</div>
							<div class="widget-data">
								<div class="h4 mb-0">400</div>
								<div class="weight-600 font-14">Deals</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<div id="chart3"></div>
							</div>
							<div class="widget-data">
								<div class="h4 mb-0">350</div>
								<div class="weight-600 font-14">Campaign</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<div id="chart4"></div>
							</div>
							<div class="widget-data">
								<div class="h4 mb-0">$6060</div>
								<div class="weight-600 font-14">Worth</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		
			<div class="xs-pd-20-10 pd-ltr-20">
				<div class="row">
					<div class="page-header">
							<a href="creacionProducto.php" class="btn btn-secondary btn-lg btn-block"  >Añadir Nuevo Producto al Almacen</a>
					</div>
				</div>
			</div>
		
<?php
$link = new PDO('mysql:host=localhost;dbname=bduv', 'root', '');
?>
			<!--TABLA DATOS -->
			<div class="card-box mb-30">
				<h2 class="h4 pd-20">LISTA DE PRODUCTOS EN TACO UV</h2>
				<table class="data-table table nowrap">
					<thead>
						<tr>
							<th class="table-plus datatable-nosort">Imagen</th>
							<th>Nombre</th>
							<th>Id</th>
							<th>Descripcion</th>
							<th>Categoria</th>
							<th>Precio</th>
							<th>Existencia</th>
							<th class="datatable-nosort">Opciones</th>
						</tr>
					</thead>
					<tbody>
                    <?php foreach ($link->query('SELECT * from producto') as $row){?> 
						<tr>
							<td class="table-plus">
							<img src="/img_productos/<?php echo $row['Imagen']; ?>" width="70" heigth="70"> 
							</td>

							<td>
								<h5 class="font-16"><?php echo $row['Nombre'] ?></h5>
							</td>
							<td><?php echo $row['Id'] ?></td>
							<td><?php echo $row['Descripcion'] ?></td>
							<td><?php echo $row['Categoria'] ?></td>
							<td><?php echo $row['Precio'] ?></td>
							<td><?php echo $row['Existencia'] ?></td>
							<td>
								<div class="dropdown">
									<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
										<i class="dw dw-more"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
										<a class="dropdown-item" href="actualizarProducto.php?id=<?php echo $row['Id']; ?>"><i class="dw dw-edit2"></i> Editar</a>
										<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Eliminar</a>
									</div>
								</div>
							</td>
						</tr>
                        <?php
                            }
                        ?>                       
					</tbody>
				</table>
			</div>
			<div class="footer-wrap pd-20 mb-20 card-box">
				DeskApp - Bootstrap 4 Admin Template By <a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
			</div>
		</div>
	</div>
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<script src="src/plugins/apexcharts/apexcharts.min.js"></script>
	<script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<script src="vendors/scripts/dashboard.js"></script>
</body>
</html>