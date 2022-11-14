<?php
include_once '../models/Usuario.php';
session_start();
$user = $_POST['user'];
$pass = $_POST['pass'];
$usuario = new Usuario();

if (!empty($_SESSION['us_tipo'])) {
    switch ($_SESSION['us_tipo']){
        case 1:
            header('Location: ../views/adm_catalog.php');
        break;
        case 2:
            header('Location: ../views/adm_catalog.php');
        break;
        case 3:
            header('Location: ../views/tec_catalog.php');
        break;
    }
}
else {

    $usuario->loguear($user,$pass);    
    if (!empty($usuario->objects)){
        foreach ($usuario -> objects as $object){
        $_SESSION['usuario']=$object->id_usuario;
        $_SESSION['us_tipo']=$object->us_tipo;
        $_SESSION['nombre_us']=$object->nombre_us;
        }
        switch ($_SESSION['us_tipo']){
            case 1:
                header('Location: ../views/adm_catalog.php');
            break;
            case 2:
                header('Location: ../views/adm_catalog.php');
            break;
            case 3:
                header('Location: ../views/tec_catalog.php');
            break;
        }

    }
    else {
        header('Location: ../views/login.php');
    }
}
?>