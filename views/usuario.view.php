<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Usuario</title>
</head>
<body>
    <h1>Hola usuario</h1>
    <h1>Hola <?php echo $_SESSION['usuario'];?></h1>
    <a href="logout.php">Cerrar Sesion</a>
</body>
</html>