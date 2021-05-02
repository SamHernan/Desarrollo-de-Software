<?php
    include 'includes/database.php';
    include 'carrito.php';
    error_reporting(0);

?>

<!DOCTYPE html>
<html lang="en">
    <head >

        <!-- Basic -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">

        <!-- Site Metas -->
        <title>Food Funday Restaurant - One page HTML Responsive</title>
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Site Icons -->
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
        <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Site CSS -->
        <link rel="stylesheet" href="css/style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- color -->
        <link id="changeable-colors" rel="stylesheet" href="css/colors/orange.css" />
        <!-- Modernizer -->
        <script src="js/modernizer.js"></script>

        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>
        <div id="loader">
            <div id="status"></div>
        </div>
        <div id="site-header">
            <header id="header" class="header-block-top-producto">
                <div class="container">
                    <div class="row">
                        <div class="main-menu">
                            <!-- navbar -->
                            <nav class="navbar navbar-default" id="mainNav">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <div class="logo">
                                        <a class="navbar-brand js-scroll-trigger logo-header" href="#">
                                            <img src="images/logo.png" alt="Logo" width="150" height="55">
                                        </a>
                                    </div>
                                </div>
                                <div id="navbar" class="navbar-collapse collapse">
                                    <ul class="nav navbar-nav navbar-right">
                                        <li class="active"><a href="index2.php">Home</a></li>
                                        <li><a href="#footer">Hola <?php echo $_SESSION['Nombre'];?></a></li>
                                        <li><a href="#footer">Tienes  <?php echo $_SESSION['Taqui'];?> Taqui-Puntos</a></li>
                                        <!-- <li><a href="mostrarCarrito.php">
                                            Ver Carrito(<?php //echo (empty($_SESSION['CARRITO']))?0: count($_SESSION['CARRITO']); ?>)</a>
                                        </li> -->
                                        <li><a href="logout.php">Cerrar Sesion</a></li>
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

        
        <div id="about" class="about-main pad-top-100-producto pad-bottom-100">
            <div class="container">
                <div class="row">
                    <div >
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s" >
                            
                            <h2 id="nombre" class="block-title pad">Contenido del Carrito:</h2>
                            <?php if(!empty($_SESSION['CARRITO'])){?>
                            <table class="table table-light table-bordered">
                                <tbody>
                                    <tr>
                                        <th width="40%" class="text-center">Descripción</th>
                                        <th width="15%" class="text-center">Cantidad</th>
                                        <th width="20%" class="text-center">Precio</th>
                                        <th width="20%" class="text-center">Total</th>
                                        <th width="5%">...</th>
                                    </tr>

                                    <?php $total=0;?>
                                    <?php foreach($_SESSION['CARRITO'] as $indice=>$producto){?>
                                    <tr>
                                        <td width="40%"><?php echo $producto['nombre'];?></td>
                                        <td width="15%" class="text-center"><?php echo $producto['cantidad'];?></td>
                                        <td width="20%" class="text-center"><?php echo $producto['precio'];?></td>
                                        <td width="20%" class="text-center"><?php echo number_format($producto['precio']*$producto['cantidad'],2);?></td>
                                        <td width="5%">
                                            <form action="" method="post">
                                                <input type="hidden" 
                                                name="productID" 
                                                id="productID" 
                                                value="<?php echo openssl_encrypt($producto['id'],COD,KEY); ?>">
                                                <button 
                                                class="btn btn-danger" 
                                                type="submit"
                                                name="btnCarrito"
                                                value="Eliminar"
                                                >Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php $total=$total+($producto['precio']*$producto['cantidad']);
                                        $_SESSION['Pedido']['TotalPagar']=$total;
                                    ?>
                                    <?php }?>

                                    <tr>
                                        <td colspan="3" align="right"><h3>Total</h3> </td>
                                        <td align="right"><h3>$<?php echo number_format($total,2); ?></h3></td>
                                        <td></td>
                                    </tr>

                                    <tr>
                                        <td class="td-Button" colspan="1">
                                            <form action="entrega.php">
                                                <div class="form-group">
                                                    <button class="text-center btn formulario__submit btn-block " type="submit">Realizar Pedido</button>
                                                </div>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <?php } else{?>
                                <div class="alert alert-danger error1">
                                    No hay productos en el Carrito...
                                </div>
                            <?php }?>
                            
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        

        <div id="footer" class="footer-main">
            <div class="footer-box pad-top-70">
                <div class="container">
                    <div class="row">
                        <div class="footer-in-main">
                            <div class="footer-logo">
                                <div class="text-center">
                                    <img src="images/logo.png" alt="" />
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="footer-box-a">
                                    <h3>Sobre Nosotros</h3>
                                    <p>Aenean commodo ligula eget dolor aenean massa. Cum sociis nat penatibu set magnis dis parturient montes.</p>
                                    <ul class="socials-box footer-socials pull-left">
                                        <li>
                                            <a href="#">
                                                <div class="social-circle-border"><i class="fa  fa-facebook"></i></div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="social-circle-border"><i class="fa fa-twitter"></i></div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="social-circle-border"><i class="fa fa-google-plus"></i></div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="social-circle-border"><i class="fa fa-pinterest"></i></div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="social-circle-border"><i class="fa fa-linkedin"></i></div>
                                            </a>
                                        </li>
                                    </ul>
    
                                </div>
                                <!-- end footer-box-a -->
                            </div>
                            <!-- end col -->
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="footer-box-b">
                                    <h3>Nuestro Menu</h3>
                                    <ul>
                                        <li><a href="#">Italian Bomba Sandwich</a></li>
                                        <li><a href="#">Double Dose of Pork Belly</a></li>
                                        <li><a href="#">Spicy Thai Noodles</a></li>
                                        <li><a href="#">Triple Truffle Trotters</a></li>
                                    </ul>
                                </div>
                                <!-- end footer-box-b -->
                            </div>
                            <!-- end col -->
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="footer-box-c">
                                    <h3>Contáctanos</h3>
                                    <p>
                                        <i class="fa fa-map-signs" aria-hidden="true"></i>
                                        <span>6 E Esplanade, St Albans VIC 3021, Australia</span>
                                    </p>
                                    <p>
                                        <i class="fa fa-mobile" aria-hidden="true"></i>
                                        <span>
                                        +91 80005 89080 
                                    </span>
                                    </p>
                                    <p>
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                        <span><a href="#">support@foodfunday.com</a></span>
                                    </p>
                                </div>
                                <!-- end footer-box-c -->
                            </div>
                            <!-- end col -->
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="footer-box-d">
                                    <h3>Horario</h3>
    
                                    <ul>
                                        <li>
                                            <p>Monday - Thursday </p>
                                            <span> 11:00 AM - 9:00 PM</span>
                                        </li>
                                        <li>
                                            <p>Friday - Saturday </p>
                                            <span>  11:00 AM - 5:00 PM</span>
                                        </li>
                                    </ul>
                                </div>
                                <!-- end footer-box-d -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end footer-in-main -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
                <div id="copyright" class="copyright-main">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h6 class="copy-title"> Copyright &copy; 2017 Food Funday is powered by <a href="#" target="_blank"></a> </h6>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </div>
                <!-- end copyright-main -->
            </div>
            <!-- end footer-box -->
        </div>
        <!-- end footer-main -->
        
        <!-- ALL JS FILES -->
        <script src="js/all.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/appPro.js"></script>
        <!-- ALL PLUGINS -->
        <script src="js/custom.js"></script>
    </body>

</html>