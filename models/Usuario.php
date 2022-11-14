<?php
include_once 'Conexion.php';
class Usuario{
    var $objects;
    public function __construct(){
        $db = new Conexion();
        $this->acceso = $db->pdo;
    }
    function loguear($dni,$pass){
        $sql = "SELECT * from usuario inner join tipo_us on us_tipo = id_tipo_us where dni_us=:dni and contrasena_us=:pass";
        $query = $this->acceso->prepare($sql);
        $query->execute(array(':dni' =>$dni,':pass'=>$pass));
        $this->objects = $query->fetchall();
        return $this->objects;
    }
    function obtener_datos($id){
        $sql = "SELECT * from usuario join tipo_us on us_tipo = id_tipo_us where id_usuario=:id";
        $query = $this->acceso->prepare($sql);
        $query->execute(array(':id' =>$id));
        $this->objects = $query->fetchall();
        return $this->objects;
    }
}
?>