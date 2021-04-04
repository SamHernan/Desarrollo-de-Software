<?php
    include 'includes/database.php';
    include 'carrito.php';
    // session_start();

    $id=$_GET['id'];
    try{
        $consulta= "SELECT * FROM servicios Where id= $id";
        $consulta = mysqli_query($db, $consulta);

        $servicios= [];
        $row=mysqli_fetch_assoc($consulta);
        $servicios[0]['id'] = $row['id'];
        $servicios[0]['nombre'] = $row['nombre'];
        $servicios[0]['precio'] = $row['precio'];

    }catch (Throwable $thr){
        var_dump($thr);  
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
                                            <img src="images/logo.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div id="navbar" class="navbar-collapse collapse">
                                    <ul class="nav navbar-nav navbar-right">
                                        <li class="active"><a href="index.php">Home</a></li>
                                        <li><a href="#about">About us</a></li>
                                        <li><a href="#menu">Menu</a></li>
                                        <li><a href="#our_team">Team</a></li>
                                        <li><a href="#gallery">Gallery</a></li>
                                        <li><a href="#blog">Blog</a></li>
                                        <li><a href="#pricing">pricing</a></li>
                                        <li><a href="#reservation">Reservaion</a></li>
                                        <li><a href="#footer">Contacto</a></li>
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
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <h4><?php echo $mensaje; ?></h4>
                            <h2 id="nombre" class="block-title pad"><?php echo($servicios[0]['nombre']); ?></h2>
                            <h3>Descripción:</h3>
                            <p id="descrip"><?php echo($servicios[0]['nombre']); ?> </p>
                            <h3>Precio:</h3>
                            <p id="precio"><?php echo('$'.$servicios[0]['precio']); ?></p>
                        
    
                            <form action="" method="post" class="formulario" >
                                <h3>Stock:</h3>
                                <h3 id="stock" class="stock"><?php echo($servicios[0]['precio']); ?></h3>
                                <label class="formulario__label">Cantidad:</label>

                                <input type="hidden" name="productID" id="productID" value="<?php echo openssl_encrypt($servicios[0]['id'],COD,KEY); ?>">
                                <input type="hidden" name="ProductoName" id="ProductoName" value="<?php echo openssl_encrypt($servicios[0]['nombre'],COD,KEY); ?>">
                                <input type="hidden" name="productPre" id="productPre" value="<?php echo openssl_encrypt($servicios[0]['precio'],COD,KEY); ?>">
                                <input type="number" name="cantidad" id="cantidad" class="formulario__campo"  placeholder="Seleccionar" min="1" max="" value="1 " >
                                
                                <input name="btnCarrito" class="formulario__submit" type="submit" value="Agregar al carrito">
                            </form>
                            
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <div class="about-images">
                                <img class="about-main" src="images/about-main.jpg" alt="About Main Image">
                                <!-- <img class="about-inset" src="images/about-inset.jpg" alt="About Inset Image"> -->
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
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
                                    <h3>About Us</h3>
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
                                    <h3>New Menu</h3>
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
                                    <h3>Contact Us</h3>
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
                                    <h3>Opening Hours</h3>
    
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

 