<?php

include('connection.php');
 $con = connection();
 
 $db = "bicicleta";

 $id=null;

$codigo_cliente = $_POST['codigo_cliente'];

$nombre_cliente = $_POST['nombre_cliente'];

$hora_inicio = $_POST['hora_inicio'];

$hora_finalizada = $_POST['hora_finalizada'];

$año_de_servicio = $_POST['año_de_servicio'];

$fabricante = $_POST['fabricante'];

$marca = $_POST['marca'];

$estado = $_POST['estado'];


$sql="INSERT INTO  bicicleta values('$id','$codigo_cliente','$nombre_cliente','$hora_inicio','$hora_finalizada','$año_de_servicio','$fabricante','$estado')";
$query = mysqli_query($con,$sql);




//AGREGAR AQUI EL CODIGO PHP QUE SE MODIFICA EN NAVICAT 

if($query){
    Header("Location:index.php");  
    //esto lo que hace es que es crear un encabezado cuando el 
    //usuario le da al boton submit todos los valores seran cargados en la base de datos se va a redireccionar los datos
    //al index.php de esta forma se van a cargar los datos en la tabla cada vez que se actualice la informacion


};

?>