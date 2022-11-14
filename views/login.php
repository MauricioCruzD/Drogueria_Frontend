<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/login.css">
    <link rel="stylesheet" href="../assets/css/css/all.min.css">
    <title>Login</title>
</head>
<?php
session_start();
if(!empty($_SESSION['us_tipo'])){
    header('Location: ../controllers/loginController.php');
}
else{
    session_destroy();

?>
<body>
    <img src="../assets/img/wave.png" class="wave" alt="">
    <div class ="content">
        <div class ="img">
            <img src="../assets/img/medicine.svg" alt="">
        </div>
        <div class="content-login">
            <form action="../controllers/loginController.php" method="post">
                <img src="../assets/img/farmacy_1.jpeg" alt="">
                <h2>Farmacia</h2>
                <div class="input-div dni">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>ID</h5>
                        <input type="text" name="user" class="input">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Contraseña</h5>
                        <input type="password" name="pass" class="input">
                    </div>
                </div>
                <a href="">Created</a>
                <input type="submit" class="btn" value="Iniciar Sesion">
            </form>

        </div>
    </div>
    
</body>
<script src="../assets/js/login.js"></script>
</html>
<?php
}
?>