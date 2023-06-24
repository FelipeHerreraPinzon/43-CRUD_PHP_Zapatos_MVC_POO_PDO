<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body>
    <div clas="container">
         <div class="row">
            <div class="col-md-12">
                <div>
                    <h2>LISTA DE ZAPATOS</h2>
                </div>
                <a href="?c=nuevo">Nuevo</a>
                <table border="1">
                    <tr>
                        <th>ID</th>
                        <th>PRECIO</th>
                        <th>COLOR</th>
                        <th>ESTILO</th>
                        <th>TALLA</th>
                        <th>GENERO</th>
                        <th>CANTIDAD</th>
                        <th>ELIMINAR</th>
                        <th>EDITAR</th>
                       
                    </tr>

                <?php foreach($this->model->mostrarDatos() as $k) :  ?>

                    <tr>

                    <td><?php echo $k->id_zapato; ?></td>
                    <td>$ <?php echo $k->precio; ?></td>
                    <td><?php echo $k->color; ?></td>
                    <td><?php echo $k->estilo; ?></td>
                    <td><?php echo $k->talla; ?></td>
                    <td><?php echo $k->genero; ?></td>
                    <td><?php echo $k->cantidad; ?></td>
                    <td>
                        <button onclick="return confirm('deseas borrar esto???')"><a href="?c=eliminar&id=<?php echo $k->id_zapato; ?>" >ELIMINAR</a></button>
                    </td>
                    <td>
                        <a href="?c=nuevo&id=<?php echo $k->id_zapato; ?>">EDITAR</a>
                    </td>
                    
                </tr>
                <?php endforeach; ?>
                
                
                </table>
                


            </div>

        </div>




    </div>







    
</body>
</html>