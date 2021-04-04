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
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- color -->
    <link id="changeable-colors" rel="stylesheet" href="css/colors/orange.css" />

    <!-- Modernizer -->
    <script src="js/modernizer.js"></script>
</head>

<body>

    <?php //Definición de algunas variables
    session_start();
    $_SESSION['idP'] = "0";
    $_GET['id']=0;
    // session_destroy();
    ?>
    <!-- Fin definición variables-->

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
                                    <li><a href="#about">Nosotros</a></li>
                                    <li><a href="#especiales">Especiales</a></li>
                                    <li><a href="#gallery">Galeria</a></li>
                                    <li><a href="#sucursal">Sucursal</a></li>
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
                            <p></p>
                            <div class="book-btn">
                                <a href="#reservation" class="table-btn hvr-underline-from-center">Registro</a>
                                <a href="#reservation" class="table-btn hvr-underline-from-center">Inicio Sesión</a>
                            </div>
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

    <div id="about" class="about-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title">Nosotros </h2>
                        <h3>TODO GRAN SABOR TIENE SU HISTORIA...</h3>
                        <p>
                            Todo comenzó en el año 1986 en el Centro de la conocida como
                            Atenas Veracruzana por ser un importante centro cultural y académico
                            la ciudad de Xalapa, una familia decidió emprender el sueño de ofrecer
                            a los amantes del taco un sabor inigualable.
                        </p>

                        <p>
                            Y hasta la fecha nadie puede igualar nuestros tacos, preparados con la receta
                            tradicional originaria de Xalapa. Marinamos la carne con la mezcla
                            perfecta de chiles y condimentos.
                        </p>
                        <p>
                            Para nuestro pastor, uno de los más reconocidos ante nuestros
                            clientes; apilamos la carne y la piña para formar el trompo, para
                            asarlo lentamente para finalmente cortarlo con maestría sobre una
                            tortilla.
                        </p>

                        <p>
                            Así es como llevamos nuestro sabor en cada plato. Además de hacer uso
                            de ingredientes frescos y naturales, controlados directamente por
                            el dueño y administrador de Taco UV.

                        </p>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <div class="about-images">
                            <img class="about-main" src="images/taqueria.jpg" alt="About Main Image">
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>

    <div id="especiales" class="special-menu pad-top-100 parallax">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title color-white text-center"> Especiales de Taco UV </h2>
                        <h5 class="title-caption text-center">
                            Entre las distintas variedades de tacos que ofrece Taco UV, cuenta con
                            algunos tipos de órdenes más elegidas por nuestros clientes debido al sabor
                            ,la calidad de los ingredientes que utilizamos y el entusiasmo al eleborarlos.

                        </h5>
                    </div>
                    <div class="special-box">
                        <div id="owl-demo">
                            <div class="item item-type-zoom">
                                <a href="#" class="item-hover">
                                    <div class="item-info">
                                        <div class="headline">
                                            TACOS AL PASTOR
                                            <div class="line"></div>
                                            <div class="dit-line">
                                                Es de carne de cerdo, la cual se coloca primero en un marinado con
                                                achiote,
                                                chiles, naranja y otras especias de la casa; dandole ese toque especial.
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="item-img">
                                    <img src="images/taco-3.jpg" alt="sp-menu">
                                </div>
                            </div>
                            <div class="item item-type-zoom">
                                <a href="#" class="item-hover">
                                    <div class="item-info">
                                        <div class="headline">
                                            TACOS DE CARNE ARRACHERA
                                            <div class="line"></div>
                                            <div class="dit-line">
                                                Una marinada robusta de pimienta negra gruesa, ajo y eneldo agrega una
                                                audacia picante a la arrachera, redondeado por el ahumado .
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="item-img">
                                    <img src="images/taco-8.jpg" alt="sp-menu">
                                </div>
                            </div>
                            <div class="item item-type-zoom">
                                <a href="#" class="item-hover">
                                    <div class="item-info">
                                        <div class="headline">
                                            TACOS DE COCHINITA PIBIL
                                            <div class="line"></div>
                                            <div class="dit-line">
                                                Su preparación es a base de un adobo con achiote, naranja agría y
                                                envuelta en hojas de plátano, al igual que la barbacoa, lo tradicional
                                                a sido elaborarlo desde un hoyo llamado Pib.
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="item-img">
                                    <img src="images/taco-6.jpg" alt="sp-menu">
                                </div>
                            </div>
                            <div class="item item-type-zoom">
                                <a href="#" class="item-hover">
                                    <div class="item-info">
                                        <div class="headline">
                                            TACOS PARRILLADA ESPECIAL
                                            <div class="line"></div>
                                            <div class="dit-line">
                                                Este especial es un tablero o parrillada en la cual el cliente puede
                                                elegir entre
                                                los tipos de carne que podrán combinarse como desee, además de los
                                                complementos
                                                que decida de acuerdo el tamaño.
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="item-img">
                                    <img src="images/taco-7.jpg" alt="sp-menu">
                                </div>
                            </div>
                            <div class="item item-type-zoom">
                                <a href="#" class="item-hover">
                                    <div class="item-info">
                                        <div class="headline">
                                            TACOS DE CARNE DE BARBACOA
                                            <div class="line"></div>
                                            <div class="dit-line">
                                                El mejor Barbacoa Receta de ternera. Esta sabrosa carne es sazonada y
                                                cocinada a fuego lento hasta que esté perfectamente tierna.
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="item-img">
                                    <img src="images/taco-1.jpg" alt="sp-menu">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end special-box -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end special-menu -->

    <div id="gallery" class="gallery-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title text-center"> Galeria Taco UV </h2>
                    </div>
                    <div class="gal-container clearfix">
                        <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#1">
                                    <img src="images/galeria3.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="1" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="images/galeria3.jpg" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#2">
                                    <img src="images/galeria-1.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="2" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="images/galeria-1.jpg" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#3">
                                    <img src="images/galeria-14.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="3" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="images/galeria-14.jpg" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#4">
                                    <img src="images/galeria-11.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="4" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="images/galeria-11.jpg" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#5">
                                    <img src="images/galeria-12.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="5" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="images/galeria-12.jpg" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#9">
                                    <img src="images/galeria-6.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="9" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="images/galeria-6.jpg" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#10">
                                    <img src="images/galeria-9.gif" alt="" />
                                </a>
                                <div class="modal fade" id="10" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="images/galeria-9.gif" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#11">
                                    <img src="images/galeria-2.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="11" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="images/galeria-2.jpg" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#12">
                                    <img src="images/galeria-13.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="12" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="images/galeria-13.jpg" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#13">
                                    <img src="images/galeria.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="13" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="images/galeria.jpg" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end gal-container -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
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

                <div class="blog-btn-v">
                    <a class="hvr-underline-from-center" href="#">REALIZAR ORDEN</a>
                </div>

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