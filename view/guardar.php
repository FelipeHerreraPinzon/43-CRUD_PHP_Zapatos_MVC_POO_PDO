<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="?c=guardar" method="post">

<div clas="container">
         <div class="row">
            <div class="col-md-3">  
                <input type="hidden" name="txtID" value="<?php echo $alm->id_zapato;?>">
                <input type="text" name="txtPrecio" placeholder="precio" value="<?php echo $alm->precio;?>">
            </div> 
        </div>

        <div class="row">
            <div class="col-md-3">  
                <input type="text" name="txtColor" placeholder="color" value="<?php echo $alm->color;?>">
            </div> 
        </div>

        <div class="row">
            <div class="col-md-3">  
                <input type="text" name="txtCantidad" placeholder="cantidad" value="<?php echo $alm->cantidad;?>">
            </div> 
        </div>

       
        <div>
            <select name="cmbEstilo" id="">

            <?php foreach ($this->model->cargarEstilo() as $k):?>

                <option value="<?php echo $k->id_estilo; ?>"<?php echo $k->id_estilo == $alm->id_estilo ? 'selected' : '' ?>><?php echo $k->estilo ?></option>

            <?php endforeach  ?>    

            </select>
        </div>

        <div>
            <select name="cmbTalla" id="">

            <?php foreach ($this->model->cargarTalla() as $k):?>

                <option value="<?php echo $k->id_talla; ?>"<?php echo $k->id_talla == $alm->id_talla ? 'selected' : '' ?>><?php echo $k->talla ?></option>

            <?php endforeach  ?>    

            </select>
        </div>


        <div>
            <select name="cmbGenero" id="">

            <?php foreach ($this->model->cargarGenero() as $k):?>

                <option value="<?php echo $k->id_genero; ?>"<?php echo $k->id_genero == $alm->id_genero ? 'selected' : '' ?>><?php echo $k->genero ?></option>

            <?php endforeach  ?>    

            </select>
        </div>

        <input type="submit" value="GUARDAR" name="btn_guardar">



    </div>



 </form>

    
</body>
</html>