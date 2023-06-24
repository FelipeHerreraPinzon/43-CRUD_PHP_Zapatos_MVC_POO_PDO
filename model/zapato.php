<?php

class Zapato{

    public $cnx;
    public $id_zapato;
    public $precio;
    public $color;
    public $id_estilo;
    public $id_talla;
    public $id_genero;
    public $cantidad;


    public function __construct(){
        try {
            $this->cnx = Conexion::conectar();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function mostrarDatos(){
        try {
            $query= "SELECT zapato.id_zapato, zapato.precio, zapato.color, estilo.estilo, genero.genero, talla.talla, zapato.cantidad 
                    FROM zapato INNER JOIN estilo ON zapato.id_estilo = estilo.id_estilo 
                                INNER JOIN talla ON zapato.id_talla = talla.id_talla 
                                INNER JOIN genero ON zapato.id_genero = genero.id_genero;";

            $stmt = $this->cnx->prepare($query);     
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);              
        } catch (Exception $e) {
            die($e->getMessage());
        }

    }

    public function cargarTalla(){
        try {
            $query= "SELECT * FROM talla";

            $stmt = $this->cnx->prepare($query);     
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);              
        } catch (Exception $e) {
            die($e->getMessage());
        }

    }

    public function cargarEstilo(){
        try {
            $query= "SELECT * FROM estilo";

            $stmt = $this->cnx->prepare($query);     
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);              
        } catch (Exception $e) {
            die($e->getMessage());
        }

    }

    public function cargarGenero(){
        try {
            $query= "SELECT * FROM genero";

            $stmt = $this->cnx->prepare($query);     
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);              
        } catch (Exception $e) {
            die($e->getMessage());
        }

    }

    public function borrar($id){
        try {
            
            $query = "DELETE FROM zapato WHERE id_zapato =?";
            $stmt = $this->cnx->prepare($query);
            $stmt->execute(array($id));
        } catch (Exception $e) {
            die($e->getMessage());
        }

    }

    public function cargarID($id){
        try {
            $query= "SELECT * FROM zapato WHERE id_zapato =?";

            $stmt = $this->cnx->prepare($query);     
            $stmt->execute(array($id));
            return $stmt->fetch(PDO::FETCH_OBJ);              
        } catch (Exception $e) {
            die($e->getMessage());
        }

    }

    public function registrar(zapato $data){
        try {
            $query = "INSERT INTO zapato (precio, color, cantidad, id_estilo, id_talla, id_genero)
                      VALUES (?,?,?,?,?,?)";     
            $this->cnx->prepare($query)->execute(array($data->precio,
                                                       $data->color,
                                                       $data->cantidad,
                                                       $data->id_estilo,
                                                       $data->id_talla,
                                                       $data->id_genero));                   
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function actualizarDatos($data){
        try {
            $query = "UPDATE zapato SET precio=?, color=?, cantidad=?, id_estilo=?, id_talla=?, id_genero=?
                      WHERE id_zapato=?";     
            $this->cnx->prepare($query)->execute(array($data->precio,
                                                       $data->color,
                                                       $data->cantidad,
                                                       $data->id_estilo,
                                                       $data->id_talla,
                                                       $data->id_genero,
                                                       $data->id_zapato));                   
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}



?>