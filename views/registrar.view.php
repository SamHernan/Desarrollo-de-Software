<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Registro</title>
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
<body class="bg-gradient-primary">
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-5">Crea tu cuenta</h1>
                            </div>
                            <form class="user" name="login" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="nombre"  placeholder="Nombre Completo" onkeypress="return permite(event, 'car')">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user"  name="email"  placeholder="Correo Electronico">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <input type="tel" class="form-control form-control-user" name="telefono" maxlength="10" placeholder="Telefono" onkeypress="return permite(event, 'num')">
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"  id ="password" name="password" placeholder="Contraseña">
                                    </div>                            
                                </div>
                                <div class="form-group row">
                                <div class="col-sm-6">
                                    </div>                                    
                                <div class="col-sm-6 mb-3 mb-sm-0" id="strengthMessage">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">Registrar Cuenta</button>
                                <?php if(!empty($errores)): ?>
                                    <hr>
                                    <div class="alert alert-danger small text-center" role="alert">
                                        <?php echo $errores; ?>
                                    </div>
                                <?php endif; ?>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="olvidoPassword.php">¿Has olvidado tu contraseña?</a>
                            </div>
                            <div class="text-center">
                                <p class="small">¿Ya tienes una cuenta?
			                        <a href="login.php">Acceder</a>
		                        </p>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script src="js/validaciones.js"></script>

    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>-->
    <script src="js/CheckPassword.js"></script>
    <link href="css/CheckPassword.css" rel="stylesheet" />   

</body>
</html>