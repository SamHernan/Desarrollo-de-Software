<!DOCTYPE html>
<html>

    <head>
        <!-- Basic Page Info -->
        <meta charset="utf-8">
        <title>Creación Producto</title>
    
       <!-- Site favicon -->
		<link rel="icon" type="image/png" sizes="32x32" href="/vendors/img/icono-taco.png">
    
        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="/vendors/styles/core.css">
        <link rel="stylesheet" type="text/css" href="/vendors/styles/icon-font.min.css">
        <link rel="stylesheet" type="text/css" href="/src/plugins/jquery-steps/jquery.steps.css">
        <link rel="stylesheet" type="text/css" href="/src/plugins/dropzone/src/dropzone.css">
        <link rel="stylesheet" type="text/css" href="/src/plugins/sweetalert2/sweetalert2.css">
        <link rel="stylesheet" type="text/css" href="/vendors/styles/style.css">
        <!-- switchery css -->
        <link rel="stylesheet" type="text/css" href="/src/plugins/switchery/switchery.min.css">
        <!-- bootstrap-tagsinput css -->
        <link rel="stylesheet" type="text/css" href="/src/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css">
        <!-- bootstrap-touchspin css -->
        <link rel="stylesheet" type="text/css" href="/src/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.css">

    
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
    
            gtag('config', 'UA-119386393-1');
        </script>
    </head>
<!-- IMAGEN DE CARGA DE PAGINA -->

<body>
	<div class="pre-loader">
		<div class="pre-loader-box">
			<div class="loader-logo"><img src="/vendors/img/login.gif" alt=""></div>
			<div class='loader-progress' id="progress_div">
				<div class='bar' id='bar1'></div>
			</div>
			<div class='percent' id='percent1'>90%</div>
			<div class="loading-text">
				Cargando...
			</div>
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
							<img src="/vendors/img/admin.png" alt="">
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

			<a href="/index.php">

				<img src="/vendors/img/logo-inicio.png" alt="" class="dark-logo">
				<img src="/vendors/img/logo-inicio.png" alt="" class="light-logo">
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
						<a href="/index.php" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-house-1"></span><span class="mtext">Inicio</span>
						</a>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-library"></span><span class="mtext">Productos </span>
						</a>
						<ul class="submenu">
							<li><a href="listaProductos.php">Productos Existentes</a></li>
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
						<a href="invoice.html" class="dropdown-toggle no-arrow">
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
						<a href="/index.php" class="dropdown-toggle no-arrow">
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
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Productos Existentes</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="/index.php">Inicio</a></li>
									<li class="breadcrumb-item active" aria-current="page">Productos Existentes</li>
								</ol>
							</nav>
						</div>
					</div>
                </div>

	<?php
	$link = new PDO('mysql:host=localhost;dbname=bduv', 'root', '');
	?>


				<div class="page-header">
					<div class="clearfix">
						<h4 class="text-blue h4">Datos Producto</h4>
						<p class="mb-30">Ingrese los datos requeridos para añadir un nuevo producto al almacen de Taco UV.</p>
					</div>
					
					<div class="wizard-content">
						<form class="tab-wizard wizard-circle wizard vertical" enctype="multipart/form-data" class="user" name="login" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">							
							<section>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Nombre Producto:</label>
											<input type="text" id = "nombre" name="nombre" class="form-control form-control-user" onkeypress="return permite(event, 'car')">
										</div>
										<div class="form-group">
                                            <label>Cantidad en Existencia:</label>
                                            <input type="text" value="" id = "existencia" name="existencia" class="form-control form-control-user" onkeypress="return permite(event, 'num')">
                                        </div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
										
											<label>Categoria:</label>
											<select name="categoria" id = "categoria" class="form-control form-control-user">

											<?php foreach ($link->query('SELECT * from producto') as $row){?>
												<option><?php echo $row['Categoria'] ?></option>
												<!--<input type="text" value="" id = "categoria" name="categoria" class="form-control form-control-user">-->
											<?php
                            					}
                        					?>  
											</select>
											<!--<input type="text" value="" id = "categoria" name="categoria" class="form-control form-control-user">-->
											
										</div>
										<div class="form-group">
                                            <label>Precio de Venta:</label>
                                            <input id="precio" type="text" value="0" name="precio" class="form-control form-control-user" onkeypress="return permite(event, 'num')">
                                        </div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label>Descripción del Producto:</label>
											<input name="descripcion" id = "descripcion" class="form-control form-control-user">
										</div>
									</div>
									<div class="col-md-12">
									<div class="form-group">
										<h4 class="text-blue h4">Adjuntar Imagen Producto</h4>
										<!--<input type="text" name="imagen" id="imagen" class="form-control form-control-user">
										<input type="file" name="imagen" id="imagen" class="form-control form-control-user"  accept="image/png"/>-->
										<input name="imagen" type="file" id="imagen"  class="form-control form-control-user" accept="image/png"/>
									</div>
								</div>							
								</div>
							</section>
							<section>
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <p><p></p></p>
                                        <a href="creacionProducto.php" class="btn btn-primary" >Limpiar Campos</a>
                                        <a class="btn btn-secondary"id="sa-params">Cancelar Registro</a>
										<button type="submit" class="btn btn-primary">Registrar Producto</button>
                                    </div>                              
                                </div>
								<?php if(!empty($errores)): ?>
										<hr>
										<div class="alert alert-danger small text-center" role="alert">
											<?php echo $errores; ?>
										</div>
										<?php endif; ?>
                            </div>
                        </section>							
						</form>
					</div>
                        <!--<div class="clearfix mb-20">
                            <div class="pull-left">
                                <h4 class="text-blue h4">Adjuntar Imagen Producto</h4>
                            </div>
                        </div>
                        <form class="dropzone" action="#" id="my-awesome-dropzone">
                            <div class="fallback">
                                <input type="file" name="file" />
								<input type="text" name="imagen" id="imagen">
                            </div>
                        </form>-->

				</div>
			</div>
		</div>
	</div>
	<!-- js -->
	<script src="/vendors/scripts/core.js"></script>
	<script src="/vendors/scripts/script.min.js"></script>
	<script src="/vendors/scripts/process.js"></script>
	<script src="/vendors/scripts/layout-settings.js"></script>
    <script src="/src/plugins/dropzone/src/dropzone.js"></script>
	<script src="/src/plugins/jquery-steps/jquery.steps.js"></script>
	<script src="/vendors/scripts/steps-setting.js"></script>
    <!-- switchery js -->
	<script src="/src/plugins/switchery/switchery.min.js"></script>
	<!-- bootstrap-tagsinput js -->
	<script src="/src/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
	<!-- bootstrap-touchspin js -->
	<script src="/src/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
	<script src="/vendors/scripts/advanced-components.js"></script>
    <!-- add sweet alert js & css in footer -->
	<script src="/src/plugins/sweetalert2/sweetalert2.all.js"></script>
	<script src="/src/plugins/sweetalert2/sweet-alert.init.js"></script>
	<script src="/vendors/scripts/validaciones.js"></script>
	
</body>	
</html>
