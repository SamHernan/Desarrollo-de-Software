<?php
include 'includes/database.php';
include 'carrito.php';

error_reporting(0);
// $_SESSION['direccionP'] = 0;
// $_SESSION['direccionP'] = $_GET['direccion'];
if ($_POST['metodoEn']) {
    $_SESSION['Pedido']['Direccion'] = $_POST['metodoEn'];
    if ($_SESSION['Pedido']['Direccion'] == 'domicilio') {
        echo '<script type="text/javascript">
            //alert("Agrega Productos a tu carrito");
            //window.location.href="direcciones.php";
        </script>';
    }
} else {
    echo '<script type="text/javascript">
            //alert("Agrega Productos a tu carrito");
            window.location.href="index2.php";
        </script>';
}
// if ($_SESSION['Pedido']['Direccion']==0) {
//     echo'<script type="text/javascript">
//             //alert("Agrega Productos a tu carrito");
//             window.location.href="index.php";
//         </script>';
// }else {
//     $_SESSION['Pedido']['Direccion']=$_POST['metodoEn'];
// }

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
                                    <li><a href="#footer">Hola <?php echo $_SESSION['Nombre']; ?></a></li>
                                    <li><a href="#footer">Tienes <?php echo $_SESSION['Taqui']; ?> Taqui-Puntos</a></li>
                                    <!-- <li><a href="mostrarCarrito.php">
                                            Ver Carrito(<?php //echo (empty($_SESSION['CARRITO']))?0: count($_SESSION['CARRITO']); 
                                                        ?>)</a>
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
            <h2 class="h2-2nice">Selecciona un método de pago <?php echo ' Enviar a:' . $_SESSION['Pedido']['Direccion']; ?></h2>
            <div class="row">
                <form action="entrega.php" method="post">
                    <!-- <input type="hidden" name="metodoEn" value="<?php echo $_SESSION['Pedido']['Direccion']; ?>" text="Regresar" /> -->
                    <input type="submit" name="" value="<<<<Regresar" />
                </form>
                <div class="special-box">
                    <div id="owl-demo">

                        <div class="item item-type-zoom entrega">
                            <form action="pagoR.php" method="post">
                                <input type="hidden" name="metodoPa" id="metodoPa" value="Contra Entrega">
                                <button type="submit" class="item-hover">
                                    <div class="item-info">
                                        <div class="headline">
                                            Contra Entrega
                                            <div class="line"></div>
                                            <div class="dit-line">Paga al recibir tu pedido (Únicamente válido dinero en efectivo).</div>
                                        </div>
                                    </div>
                                </button>
                            </form>
                            <div class="item-img">
                                <img src="images/efectivo.png" alt="sp-menu">
                            </div>
                        </div>
                        <div class="item item-type-zoom entrega">
                            <form action="pagoR.php" method="post">
                                <input type="hidden" name="metodoPa" id="metodoPa" value="PayPal">
                                <button type="submit" class="item-hover">
                                    <div class="item-info">
                                        <div class="headline">
                                            PayPal
                                            <div class="line"></div>
                                            <div class="dit-line">Paga comodamente con tu cuenta de PayPal (Válido en todo caso) </div>
                                        </div>
                                    </div>
                                </button>
                            </form>
                            <div class="item-img">
                                <img src="images/paypal.png" alt="sp-menu">
                            </div>
                        </div>
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
                                        <span> 11:00 AM - 5:00 PM</span>
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