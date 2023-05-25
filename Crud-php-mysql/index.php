<?php
    include('connection.php'); 
    $con = connection();

    $sql = "SELECT * FROM `bicicleta`";
    $query = mysqli_query($con,$sql);
    };

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Habana Bici</title>
    <link rel="stylesheet"  type="text/css" href="index.css">
    
</head>
<body>
    <div class="input-group justify-content-center alig-items-center">
        <form action="create_datos.php" method="POST"><!-- metodo para introduccion de datos -->
            <h2>Consulta</h2>

            <input type="text" name="id" placeholder="id"  class="form-control" >
            <input type="text" name="codigo_cliente" placeholder="codigo_cliente"  class="form-control">
            <input type="text" name="nombre_cliente" placeholder="nombre_cliente"  class="form-control">
            <input type="time" name="hora_inicio" class="form-control">
            <input type="time" name="hora_finalizada" placeholder="hora_finalizada"  class="form-control">
            <input type="text" name="año_de_servicio" placeholder="año_de_servicio"  class="form-control">
            <input type="text" name="fabricante" placeholder="fabricante"  class="form-control">
            <input type="text" name="marca" placeholder="marca"  class="form-control">
            <input type="text" name="estado" placeholder="estado"  class="form-control">
            
            <div class="row w-100 align-items-center">
    			<div class="col text-center">
                <input type="submit" value="Crear" class="btn btn-warning regular-button">
    			</div>	
    		</div>
        </form>
    </div>
    <div>
        <h2>Clientes</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>codigo_cliente</th>
                    <th>nombre_cliente</th>
                    <th>hora_inicio</th>
                    <th>año_de_servicio</th>
                    <th>fabricante</th>
                    <th>marca</th>
                    <th>estado</th>

                    
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                   
                <tr>
                
                <th><?=$row['id']?></th>
                <th><?=$row['codigo_cliente']?></th>
                <th><?=$row['nombre_cliente']?></th>
                <th><?=$row['hora_inicio']?></th>
                <th><?=$row['año_de_servicio']?></th>
                <th><?=$row['fabricante']?></th>
                <th><?=$row['marca']?></th>
                <th><?=$row['estado']?></th>

                <th><a href="">Editar</a></th>
                <th><a href="">Eliminar</a></th>
                </tr>
                <?php endwhile ?>
            </tbody>
        </table>
    </div>

</body>
</html>