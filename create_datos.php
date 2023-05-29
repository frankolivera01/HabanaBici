<?php

include('connection.php');
 $con = connection();
 $bd = "bicicleta";

 if(isset($_POST['action']) && $_POST['action'] == 'create') {


$codigo_cliente = $_POST['codigo_cliente'];

$nombre_cliente = $_POST['nombre_cliente'];

$hora_inicio = $_POST['hora_inicio'];

$hora_finalizada = $_POST['hora_finalizada'];

$año_de_servicio = $_POST['año_de_servicio'];

$fabricante = $_POST['fabricante'];

$marca = $_POST['marca'];

$estado = $_POST['estado'];



$sql="INSERT INTO  bicicleta (codigo_cliente,nombre_cliente,hora_inicio,hora_finalizada,año_de_servicio,fabricante,estado);
values
('$codigo_cliente','$nombre_cliente','$hora_inicio','$hora_finalizada',año_de_servicio,'$fabricante','$estado')";


if ($connection->query($sql) === TRUE) {
    echo "true";
} else {
  echo "Error: " . $sql . "<br>" . $connection->error;
}
$connection->close();
}

if(isset($_POST['action']) && $_POST['action'] == 'update') {

    $codigo_cliente = $_POST['codigo_cliente'];
    
    $nombre_cliente = $_POST['nombre_cliente'];
    
    $hora_inicio = $_POST['hora_inicio'];
    
    $hora_finalizada = $_POST['hora_finalizada'];
    
    $año_de_servicio = $_POST['año_de_servicio'];
    
    $fabricante = $_POST['fabricante'];
    
    $marca = $_POST['marca'];
    
    $estado = $_POST['estado'];
    
    
    
    
    $sql = "UPDATE bicicleta SET 
    
    
    codigo_cliente = $codigo_cliente,
    
    nombre_cliente = $nombre_cliente,
    
    hora_inicio = $hora_inicio,
    
    hora_finalizada = $hora_finalizada,
    
    año_de_servicio = $año_de_servicio,
    
    fabricante = $fabricante,
    
    marca = $marca,
    
    estado = $estado,
    
    
    
    $conexion->close();
    
    }
    
    
    
    
    //var_dump($con);
    //exit();
    
    
    //AGREGAR AQUI EL CODIGO PHP QUE SE MODIFICA EN NAVICAT 
    
    //if($query){
        //Header("Location:index.php");  
        //esto lo que hace es que es crear un encabezado cuando el 
        //usuario le da al boton submit todos los valores seran cargados en la base de datos se va a redireccionar los datos
        //al index.php de esta forma se van a cargar los datos en la tabla cada vez que se actualice la informacion
    
    
    };
    
    ?>