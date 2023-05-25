<?php
    function connection(){
        $host = "localhost";//direccion de la BD
        $user = "root";//usuario de la BD
        $pass = "";//contraseña de la BD

        $db = "bicicletas-crud-php";//nombre de la BD

        $connect = mysqli_connect($host, $user, $pass);//para conectar con el servidor
        mysqli_select_db($connect,$db);//para conectar con la BD

        return $connect;
    };
?>