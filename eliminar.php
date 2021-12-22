<?php

include 'conexion.php';

$id=$_GET['id'];

$datoAeliminar="DELETE FROM registros WHERE id_usuario=$id";

$delete=mysqli_query($conexion, $datoAeliminar);

include 'listado.php';


?>