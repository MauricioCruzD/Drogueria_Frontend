<?php
session_start();
if($_SESSION['us_tipo']==3){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Técnico</title>
</head>
<body>
    <h1>Hola Técnico</h1>
    <a href="../controllers/logout.php">Cerrar Sesion</a>
</body>
</html>
<?php
}
else {
    header('Location: ../views/login.php');
}
?>