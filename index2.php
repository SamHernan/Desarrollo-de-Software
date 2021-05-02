<?php
    session_start();
    date_default_timezone_set('America/Mexico_City');
    $_SESSION['Pedido']['idCliente']=$_SESSION['ID_C'];
    $_SESSION['Pedido']['Fecha']='';
    $_SESSION['Pedido']['status']='';
    $_SESSION['Pedido']['coment']='';
    $_SESSION['Pedido']['metPago']=0;
    $_SESSION['Pedido']['TotalPagar']=0;
    $_SESSION['Pedido']['Direccion']=0;
    if(!isset($_SESSION['rol'])){
        header('location: login.php');
    }else{
        if($_SESSION['rol'] !=3){
            header('location: login.php');
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">

    <!-- Site Metas -->
    <title>Taco UV</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/taco-icono.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style3.css">
    <link rel="stylesheet" href="css/style4.css">

    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min2.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css" type="text/css">
    <!-- color -->
    <link id="changeable-colors" rel="stylesheet" href="css/colors/orange.css" />

    <!-- Modernizer -->
    <script src="js/modernizer.js"></script>
    <script src="js/modernizr-2.6.2.min.js"></script>

</head>

<body>
    <div id="loader">
        <div id="status"></div>
    </div>
    <div id="site-header">
        <header id="header" class="header-block-top">
            <div class="container">
                <div class="row">
                    <div class="main-menu">
                        <!-- navbar -->
                        <nav class="navbar navbar-default" id="mainNav">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <div class="logo">
                                    <a class="navbar-brand js-scroll-trigger logo-header" href="#">
                                        <img src="images/logo.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="active"><a href="#banner">Inicio</a></li>
                                    
                                    <li><a href="#footer"><?php echo $_SESSION['Taqui'];?> Taqui-Puntos</a></li>
                                    <li><a href="mostrarCarrito.php">
                                            Ver Carrito(<?php echo (empty($_SESSION['CARRITO']))?0: count($_SESSION['CARRITO']); ?>)</a>
                                    </li>
                                    <li><a href="#about">Us</a></li>
                                    <li><a href="#menu">Menu</a></li>
                                    <li><a href="listarDirecciones.php">Direcciones</a></li>
                                    <li><a href="logout.php">Logout</a></li>
                                </ul>
                            </div>
                            <!-- end nav-collapse -->
                        </nav>
                        <!-- end navbar -->
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </header>
        <!-- end header -->
    </div>
    <!-- end site-header -->

    <div id="banner" class="banner full-screen-mode parallax">
        <div class="container pr">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="banner-static">
                    <div class="banner-text">
                        <div class="banner-cell">
                            <p></p>
                            <p></p>
                            <h1>Taqueria Taco UV <span class="typer" id="some-id" data-delay="200" data-delim=":"
                                    data-words="  Tacos:Postres:Bebidas" data-colors="red"></span><span class="cursor"
                                    data-cursorDisplay="_" data-owner="some-id"></span></h1>
                            <p></p>
                            <h2>Los Autenticos Tacos del Halcon</h2>
                            <h3>Si buscas una taquería con la alegría y el sabor tradicional de Xalapa </h3>
                            <h3>¡Ven a Taco UV!</h3>

                            <h3>Donde te llevamos lo mejor de nuestro menú </h3>
                            <h3>para consentir a los paladares más exigentes.</h3>
                            <a href="#about">
                                <div class="mouse"></div>
                            </a>
                        </div>
                        <!-- end banner-cell -->
                    </div>
                    <!-- end banner-text -->
                </div>
                <!-- end banner-static -->
            </div>
            <!-- end col -->
        </div>
        <!-- end container -->
    </div>
    <!-- end banner -->

    <div id="about" class="vegetable">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 ">
                    <div class="vegetable_shop">
                        <h2 class="block-title">Bienvenido </h2>
                        <h3>TODO GRAN SABOR VIENE DE LA COCINA DE TACO UV...</h3>
                        <p></p> <p></p>
                        <p>
                            Entre las distintas variedades de tacos, ya sean de carnitas, guisado, canasta, barbacoa,
                            etcétera. Hay una que quizás sea la más famosa de las últimas décadas, la más consumida, y
                            en la que combinan culturas alimenticias disímbolas : los tacos al carbón un producto
                            mexicano que ha sabido fusionar distintas gastronomías para crear un estilo de comida rápida
                            nacional y de indudable éxito.
                        </p>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 ">
                    <div class="vegetable_img">
                        <figure><img src="images/pag-2.jpg" alt="#" /></figure>
                    </div>
                </div>
                <!--<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 ">
                    <div class="vegetable_img margin_top">
                        <figure><img src="images/pag-3.jpg" alt="#" /></figure>
                        <span>02</span>
                    </div>
                </div>-->
            </div>
        </div>
    </div>

    <!-- PRUEBA APARTADO NUEVO-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 section-1 nopadding" id="work">
                <div class="logo-1 wp1"></div>
            </div>
            <div class="col-md-4 section-text nopadding">
                <div class="wp4">
                    <h2 class="frame">Vintage Oliva</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived.</p>
                    <div class="thin-sep"></div>
                </div>
                <div class="small-featured-img seat-red">
                    <div class="arrow"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 section-3">
                <div class="logo-3 wp3"></div>
            </div>
            <div class="col-md-4 section-text nopadding">
                <div class="wp6">
                    <h2 class="front-frame">Retrò Bike - M. Hulot</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived.</p>
                    <div class="thin-sep"></div>
                </div>
                <div class="small-featured-img frame-red">
                    <div class="arrow"></div>
                </div>
            </div>
            <div class="col-md-4 section-4"></div>
        </div>
    </div>
    <!-- FIN PRUEBA APARTADO NUEVO-->

<?php
$link = new PDO('mysql:host=localhost;dbname=bduv', 'root', '');
?>

    <div id="menu" class="gtco-section">
		<div class="gtco-container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h2 class="block-title text-center">Menu Taco UV</h2>
					<p class="title-caption text-center">
                        Te llevamos lo mejor de nuestro menú para consentir a los paladares más exigentes. 
                        Entre las distintas variedades de tacos, ya sean de carnitas, guisado, canasta, barbacoa,
                        etcétera que ofrece la cocina de Taqueria UV</p>
				</div>
			</div>

			<div class="slider slider-nav">
				<div class="tab-title-menu">
					<h2>CARNES UV</h2>
					<p><i class="flaticon-canape"></i> </p>
				</div>
                <div class="tab-title-menu">
                    <h2>TACOS UV</h2>
                    <p> <i class="flaticon-dinner"></i> </p>
                </div>
				<div class="tab-title-menu">
					<h2>POSTRES</h2>
					<p> <i class="flaticon-desert"></i> </p>
				</div>

                    <div class="tab-title-menu">
                        <h2>BEBIDAS</h2>
                        <p> <i class="flaticon-coffee"></i> </p>
                        <?php foreach ($link->query('SELECT * from producto') as $row){?> 
                            
                        </tr>
                        <?php
                            }
                        ?>                       
                        </tbody>
                    </div>
				</div>
                <div class="row">
                    <?php foreach ($link->query('SELECT * from producto') as $row){?> 
                    <tr>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <td>
                            <a href="/images/img_productos/<?php echo $row['Imagen']; ?>" class="fh5co-card-item image-popup">
                            </td>
                                <figure>
                                    <div class="overlay"><i class="ti-plus"></i></div>
                                    <img src="images/img_productos/<?php echo $row['Imagen']; ?>" alt="Image" class="img-responsive">
                                </figure>
                                <div class="fh5co-text">
                                    <td>
                                    <h2><?php echo $row['Nombre'] ?></h2>
                                    <p><?php echo $row['Descripcion'] ?></p>
                                    <p><span class="price cursive-font">$<?php echo $row['Precio'] ?></span></p>
                                    </td>                    
                                </div>
                                <a href="producto.php?id=<?php echo $row['Id']; ?>" class="btn btn-default btn-block">Añadir Producto</a>
                            </a>
                        </div>
                        </tr>
                            <?php
                                }
                            ?>                       
                    </tbody>
                </div>
		</div>
	</div>
    <!-- end gallery-main -->

    <div id="sucursal" class="blog-main pad-top-100 pad-bottom-100 parallax">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h2 class="block-title text-center">
                        Sucursal de Taco UV
                    </h2>
                    <div class="blog-box clearfix">
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <div class="col-md-6 col-sm-6">
                                <div class="blog-block">
                                    <div class="blog-img-box">
                                        <img src="images/galeria-12.jpg" alt="" />
                                        <div class="overlay">
                                            <a href=""><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="blog-dit">
                                        <img src="images/loc.png" alt="" />
                                        <p></p>
                                        <h2>TACO UV Xalapa-Enríquez, Ver.</h2>
                                        <h5>Juan de La Luz Enríquez 12, Zona Centro, Centro, 91000 </h5>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <div class="col-md-6 col-sm-6">
                                <div class="blog-block">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15041.326451606526!2d-96.92178802094607!3d19.527371658704947!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85db31d1082a08dd%3A0xc79c1497408df9c9!2sTacos%20La%20Vecindad%20Suc.%20Enriquez!5e0!3m2!1ses-419!2smx!4v1617523168364!5m2!1ses-419!2smx"
                                        width="600" height="450" style="border:0;" allowfullscreen=""
                                        loading="lazy"></iframe>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                    </div>
                </div>
                <!-- end blog-box -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
    </div>
    <!-- end blog-main -->

    <div id="copyright" class="copyright-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h6 class="copy-title"> Copyright &copy; 2017 Food Funday is powered by <a href="#"
                            target="_blank"></a>
                    </h6>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end copyright-main -->

    <a href="#" class="scrollup" style="display: none;">Scroll</a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/app.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
    
</body>

</html>