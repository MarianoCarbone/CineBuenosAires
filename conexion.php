<?php

    $lugarBD="localhost";
    $usuarioBD="root";

    $conexion=mysqli_connect("localhost","root","","cliente");

    if(mysqli_connect_errno())
    {
        echo "fallo: ".mysqli_connect_errno();

        $error=1045;
    }
    else
    {
        //echo"se conecto satifactoriamente desde un archivo aparte";
    }
    
?>

