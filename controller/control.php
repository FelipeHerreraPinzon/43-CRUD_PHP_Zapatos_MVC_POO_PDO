<?php
include_once ('model/zapato.php');
class Control{

    public $model;

    public function __construct(){
        $this->model = new Zapato();
    }

    public function index(){
        include_once 'view/home.php';
    }

    public function nuevo(){

        $alm = new Zapato();
        if(isset($_REQUEST['id'])){
            $alm = $this->model->cargarID($_REQUEST['id']);
        }
        include_once ('view/guardar.php');
    }

    public function guardar(){

        $alm = new Zapato();
        $alm->id_zapato = $_POST['txtID'];
        $alm->precio = $_POST['txtPrecio'];
        $alm->color = $_POST['txtColor'];
        $alm->cantidad = $_POST['txtCantidad'];
        $alm->id_estilo = $_POST['cmbEstilo'];
        $alm->id_talla = $_POST['cmbTalla'];
        $alm->id_genero = $_POST['cmbGenero'];
        
        $alm->id_zapato > 0 ? $this->model->actualizarDatos($alm) : $this->model->registrar($alm);

        header("Location: index.php");
        
    }

    public function eliminar(){
        $this->model->borrar($_REQUEST['id']);

        header("Location: index.php");
    }







}




?>