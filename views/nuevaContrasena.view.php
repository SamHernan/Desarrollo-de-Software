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

<body>
    <form class="user" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" name="NuevaPasswod">
      <div class="form-group">
        <label for="exampleInputPassword1">Ingresa tu nueva contraseña</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="contraseña1" placeholder="Contraseña">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Repite la nueva contraseña</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="contraseña2" placeholder="Contraseña">
        <input type="hidden" name="id" value="<?php echo $_GET["id"];?>">
        <input type="hidden" name="token" value="<?php echo $_GET["token"];?>">
      </div>
      <button type="submit" class="btn btn-primary">Cambiar</button>
      <?php if(!empty($errores)): ?>
        <hr>
        <div class="alert alert-danger small text-center" role="alert">
          <?php echo $errores; ?>
        </div>
      <?php endif; ?>
      <?php if(!empty($exito)): ?>
      <div class="alert alert-success small text-center" role="alert">
          <?php echo $exito; ?>
        </div>
      <?php endif; ?>
    </form>
</body>

