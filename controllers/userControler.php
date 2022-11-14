<?php
include_once ('../models/Usuario.php');
$usuario = new Usuario();

if ($_POST['func']=='search_user' ){
    $json = array();
    $usuario -> obtener_datos($_POST['dato']);
    foreach ($usuario->objects as $object) {
        $json []=array(
            'nombre'=>$object->nombre_us,
            'apellidos'=>$object->apellidos_us,
            'edad'=>$object->edad,
            'dni'=>$object->dni_us,
            'tipo'=>$object->nombre_tipo,
            'telefono'=>$object->telefono_us,
            'residencia'=>$object->residencia_us,
            'correo'=>$object->correo_us,
            'sexo'=>$object->sexo_us,
            'adicional'=>$object->adicional_us
        );
    }
    $jsonString = json_encode($json[0]);
    echo $jsonString;
}

?>