<?php
include 'includes/database.php';
include 'carrito.php';
error_reporting(0);
// $_SESSION['direccionP'] = 0;
// $_SESSION['direccionP'] = $_GET['direccion'];
if ($_POST['metodoPa']) {
    $_SESSION['Pedido']['metPago'] = $_POST['metodoPa'];
} else {
    echo '<script type="text/javascript">
            //alert("Agrega Productos a tu carrito");
            window.location.href="index2.php";
        </script>';
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
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
    <style>
        /* Media query for mobile viewport */
        @media screen and (max-width: 400px) {
            #paypal-button-container {
                width: 100%;
            }
        }

        /* Media query for desktop viewport */
        @media screen and (min-width: 400px) {
            #paypal-button-container {
                width: 250px;
                display: inline-block;
            }
        }
    </style>

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
            <form action="pago.php" method="post">
            <input type="hidden" name="metodoEn" value="<?php echo $_SESSION['Pedido']['Direccion']; ?>" text="Regresar" />
            <input type="submit" name="" value="<<<<Regresar" />
            </form>
            <!-- <h2 class="h2-2nice">Resumen de Pedido</h2> -->
            <div class="row">
                <div class="jumbotron">

                    <h1 class="display-4">Resumen del Pedido</h1>
                    <hr class="my-4">
                    <p class="lead"> <span class="bold">Datos:</span></p>
                    <span class="black"></span>
                    <p><span class="black">Cliente: </span> <?php echo $_SESSION['Nombre']; ?></p>
                    <p><span class="black">Direccion de entrega: </span> <?php echo $_SESSION['Pedido']['Direccion']; ?></p>
                    <p> <span class="black">Pago: </span><?php echo $_SESSION['Pedido']['metPago']; ?></p>
                    <!-- <hr class="my-4"> -->
                    <hr class="my-4">
                    <p class="lead bold"><span class="bold">Pedido:</span></p>

                    <?php $total = 0; ?>
                    <?php foreach ($_SESSION['CARRITO'] as $indice => $producto) { ?>

                        <p><?php echo '<span class="black">Producto:</span>' . $producto['nombre'] .
                                '<span class="black"> | Cantidad: </span>' . $producto['cantidad'] .
                                '<span class="black"> | Total= $:</span>'
                                . number_format($producto['precio'] * $producto['cantidad']); ?></p>


                        <?php $total = $total + ($producto['precio'] * $producto['cantidad']);
                        $_SESSION['Pedido']['TotalPagar'] = $total;
                        ?>
                    <?php } ?>
                    <hr class="my-4">
                    <p id="textNuevo" style="display:none">
                        <span class="bold">El nuevo Total a Pagar:</span>
                        <span class="red">$<?php echo $total - $_SESSION['Taqui']; ?>
                    </p>
                    <p id="textOriginal"><span class="bold">Total a Pagar:</span> <span class="red">$<?php echo $total; ?> </span></p>

                    <form action="realizado.php" method="post">
                        <input type="checkbox" name="cbox2" id="cbox2" value="taqui" onclick="myFunction()">
                        <label class="checkboxtext" for="cbox2"> Utilizar Taqui-Puntos <?php echo "(" . $_SESSION['Taqui'] . ")"; ?></label>

                        <input type="hidden" name="Realizado" id="Realizado" value="yes">
                        <hr class="my-4">
                        <p> <span class="black">Agregar comentario al Pedido</p>
                        <textarea placeholder="Dinos si necesitas que quitemos algo de tus alimentos" cols="100" maxlength="149" rows="5" name="comentario" id="comentario"></textarea>
                        <!-- Botonones -->
                        <?php
                        if ($_SESSION['Pedido']['metPago'] == 'Contra Entrega') {
                            echo '<button class="text-center btn formulario__submit btn-block" type="submit">Realizar Pedido</button>';
                        } else {
                            echo ' <hr class="my-4"><div id="paypal-button-container"></div>';
                        }
                        ?>
                        <!-- <button class="text-center btn formulario__submit btn-block" type="submit">Realizar Pedido</button>
                        
                        <div id="paypal-button-container"></div>  -->
                    </form>

                    <!-- PayPay -->

                    <script>
                        paypal.Button.render({
                            env: 'sandbox', // sandbox | production
                            style: {
                                label: 'checkout', // checkout | credit | pay | buynow | generic
                                size: 'responsive', // small | medium | large | responsive
                                shape: 'pill', // pill | rect
                                color: 'gold' // gold | blue | silver | black
                            },

                            // PayPal Client IDs - replace with your own
                            // Create a PayPal app: https://developer.paypal.com/developer/applications/create

                            client: {
                                sandbox: 'AXhghb6PuaPC8XZ8Dh5XqDEz897UKegnP4ndf3xZZPBpcxb4-suPeJF2OcV2q2cvCWOjGdXJlQ8nnRer',
                                production: 'insert production client id'
                            },

                            // Wait for the PayPal button to be clicked

                            payment: function(data, actions) {
                                return actions.payment.create({
                                    payment: {
                                        transactions: [{
                                            amount: {
                                                total: '<?php echo $total; ?>',
                                                currency: 'MXN'
                                            },
                                            description: "Compra de productos a TacoUV :<?php echo number_format($total, 2); ?>",
                                            custom: "<?php echo $_SESSION['Pedido']['idCliente']; ?>#"+document.getElementById('comentario').value+"#"+document.getElementById('Realizado').value
                                            // custom: $("#idInput" ).val();
                                        }]
                                    }
                                });
                            },

                            // Wait for the payment to be authorized by the customer

                            onAuthorize: function(data, actions) {
                                return actions.payment.execute().then(function() {
                                    console.log(data);
                                    window.location = "verificacion.php?paymentToken=" + data.paymentToken + "&paymentID=" + data.paymentID;
                                    // window.alert('Payment Complete!');
                                });
                            }

                        }, '#paypal-button-container');
                    </script>
                    <!-- Fin PayPal -->
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
    <script src="js/app.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
</body>

</html>