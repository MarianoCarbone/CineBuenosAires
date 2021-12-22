<?php

include 'conexion.php';


$consultas=mysqli_query($conexion, "SELECT*FROM registros");




?>





<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="estilo4.css" rel="stylesheet">
    <title>Formulario de registros</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light col-sm-12" style="background-color:rgb(73, 73, 73)">
        <div class="container-fluid"> 
        <a class="navbar-brand" style="color: white;" href="#"><img src="Cinema Buenos Aires.png" alt="" width="10%"> Cinema Buenos Aires</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
              </button>
            <div class="d-flex">
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" style="color: white;" href="index.php">Inicio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" style="color:rgb(255, 0, 21);" href="listado.php">Usuarios</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" style="color: gray;" href="formemail.php">Contáctenos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" style="color: rgb(73, 255, 1);" href="registros.php">Registro</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" style="color:greenyellow;" href="tickets.html">Comprar tickets</a>
                  </li>
                </ul>
              </div>
            </div>
        </div>
      </nav>
      <div class="textocentral">
        <div class="text-center">
            
            <h2 class="title">LISTADO DE USUARIOS REGISTRADOS</h2>
        </div>
      </div>

  

           

  <div class="row">
          <div class="col col-md-10 offset-md-1 col-lg-8 offset-lg-2 pt-2">
            

            <table  class="table table-success table-striped table-bordered border-dark">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Apellido</th>
                  <th scope="col">Email</th>
                  <th scope="col">actualizar</th>
                  <th scope="col">Borrar</th>
                </tr>
              </thead>
              <tbody>
                <tr> 
                  
                  <?php
                          while ($tabla=mysqli_fetch_array($consultas)){?>


                            <tr>
                              <td><?php echo $tabla['id_usuario'];?></td>
                            
                              <td><?php echo $tabla['nombre'];?></td>
                          
                              <td><?php echo $tabla['apellido'];?></td>

                              <td><?php echo $tabla['email'];?></td>

                              <!-- enlace...a una etiquera A....-->

                              <!-- pasamos el parametro GET ?idnavegador=93-->

                              <td><a href="actualizar2.php?id_usuario=<?php echo$tabla['id_usuario'];?>">✏</a></td>
                              <td><a href="eliminar.php?id=<?php echo$tabla['id_usuario'];?>">🗑</a></td> 

                            </tr>
                            
                            <?php }?>        
              </tbody>
            </table>
      

          </div>
  </div>


            <footer>

                <div class="d-flex justify-content-center">
                  <div class="foot">
              
                    <div class="c1">
                      <a style=" color:white; text-decoration: unset;"href="#">Preguntas frecuentes</a>
                    </div>
              
                    <div class="c2">
                      <a style="color:white; text-decoration: unset;" href="formemail.php">Contáctenos</a>
                    </div>
              
                    <div class="c3">
                      <a style="color:white; text-decoration: unset;"href="#">Prensa</a>
                    </div> 
                    
                    <div class="4">
                      <a style="color:white;text-decoration: unset;"href="#">Conferencias</a>
                    </div>
              
                    <div class="c5">
                      <a style="color:white; text-decoration: unset;" href="#">Términos y condiciones</a>
                    </div>
              
                    <div class="c6">
                      <a style="color:white;text-decoration: unset;"href="#">Privacidad</a>
                    </div>
              
                    <div class="c7">
                      <a style="color:white;text-decoration: unset;"href="#">Estudiantes</a>
                    </div>
              
                  </div>
                </div> 
              </footer>
</body>

</html>