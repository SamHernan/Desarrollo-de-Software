<?php
if(isset($_GET['id']) AND isset($_GET['token'])){
  $myId = $_GET['id'];
  $myToken = $_GET['token'];
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Nueva Contraseña</title>
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

<!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-2">Restablecer Contraseña</h1>
                                <p class="mb-4">A continuación, debes llenar los siguientes campos para efectuar el proceso solicitado. ¡Los dos campos son obligatorios!</p>
                            </div>
                            <form class="user" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" name="NuevaPasswod">
                              <div class="form-group">
                                <label for="exampleInputPassword1">Ingresa tu nueva contraseña</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" name="contraseña1" placeholder="Contraseña">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputPassword1">Repite la nueva contraseña</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" name="contraseña2" placeholder="Contraseña">
                                <input type="hidden" name="id" value='<?= $myId ?>'/>
                                <input type="hidden" name="token" value='<?= $myToken ?>'/>
                              </div>
                              <button type="submit" class="btn btn-primary">Cambiar</button>
                              <?php if(!empty($errores)): ?>
                                <hr>
                                <div class="alert alert-danger small text-center" role="alert">
                                  <?php echo $errores; ?>
                                </div>
                              <?php endif; ?>
                              <?php if(!empty($exito)): ?>
                                <hr>
                                <div class="alert alert-success small text-center" role="alert">
                                  <?php echo $exito; ?>
                                </div>
                              <?php endif; ?>
                            </form>
                            <hr>
                            <div class="text-center">
                              <a href="login.php">Acceder</a>
                            </div>
                        </div>
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
</body>

