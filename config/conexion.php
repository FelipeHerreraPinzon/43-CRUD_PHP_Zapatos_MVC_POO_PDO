<?php
class Conexion{

    public static function conectar(){
        $conex= new PDO("mysql: host=localhost; 
                                dbname=zapatos_db; 
                                charset=utf8", 
                                "root", 
                                "");

        $conex->setAttribute(PDO::ATTR_ERRMODE, 
                             PDO::ERRMODE_EXCEPTION);
        return $conex;
    }

}

?>

