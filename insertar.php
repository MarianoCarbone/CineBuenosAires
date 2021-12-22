<?php

include 'conexion.php';


$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$dni=$_POST['dni'];
$telefono=$_POST['telefono'];
$email=$_POST['email'];
$password= $_POST['password'];





$insertar="INSERT INTO registros(id_usuario, nombre, apellido, dni, telefono, email,password)VALUES(null,'$nombre','$apellido', '$dni','$telefono','$email','$password')";//null va por que esta auto incrementado
    
    $insert=mysqli_query($conexion,$insertar);



    if(!$insert)
    {
        echo"<br>";
        echo "No se ah insertado nada";

    }
    else
    {
        echo"<br>";
        echo "se ah insertado todos los datos correctamente";
    }

   header("location: index.php");


?>

