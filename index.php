<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP INTEGRADOR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
  
  <!--Comienzo del Navbar-->
  
<header>
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

<!--Fin del Navbar-->

<!--Comienzo del Carousel-->

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div id="caro" class="carousel-item active" class="background-img 100%" data-bs-interval="3000">
      <img src="peli1.jpg" class="d-block w-100" alt="imagen1">
    </div>
    <div class="carousel-item " data-bs-interval="3000">
      <img src="peli2.jpg" class="d-block w-100" alt="imagen2">
    </div>
    <div class="carousel-item " data-bs-interval="3000">
      <img src="peli3.jpg" class="d-block w-100" alt="imagen3">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>


        </header>
<!--Fin del Carousel-->

<!---Inicio del 1er texto central-->
<main>
<div class="textocentral">
  <div class="text-center">
      <p class="text mt-4">Conoce a los</p>
      <h2 class="title">Actores</h2>
  </div>
</div>

<!--Fin del 1er texto central-->

<!--Comienzo de card-->

<div class="container mb-5">
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card h-100">
        <img src="iron man.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <button type="button" class="btn btn-warning btn-sm">Cine</button>
          <button type="button" class="btn btn-danger btn-sm">Productor</button>
          <h5 class="card-title">Steve Jobs</h5>
          <p class="card-text">Robert John Downey Jr. (Nueva York, 4 de abril de 1965) es un actor, actor de voz, productor y cantante estadounidense. Inició su carrera como actor a temprana edad apareciendo en varios filmes dirigidos por su padre, Robert Downey Sr., y en su infancia estudió actuación en varias academias de Nueva York. Se mudó con su padre a California, pero abandonó sus estudios para enfocarse completamente en su carrera.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="300.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <button type="button" class="btn btn-warning btn-sm">Cine</button>
          <button type="button" class="btn btn-info btn-sm">Television</button>
          <button type="button" class="btn btn-danger btn-sm">Productor</button>
          <h5 class="card-title">Bill Gates</h5>
          <p class="card-text">Gerard James Butler (Paisley, Escocia; 13 de noviembre de 1969) es un actor de cine, televisión y productor escocés.

Después de estudiar derecho, Butler se dedicó a la actuación a mediados de la década de 1990 con pequeños papeles en producciones fílmicas. Debutó en el cine con Mrs. Brown (1997), seguida de la película de James Bond El mañana nunca muere (1997).</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="volver al futuro.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <button type="button" class="btn btn-warning btn-sm">Cine</button>
          <button type="button" class="btn btn-info btn-sm">Television</button>
          <h5 class="card-title">Ada lovelace</h5>
          <p class="card-text">Michael Andrew Fox (Edmonton, Alberta, Canadá; 9 de junio de 1961), más conocido como Michael J. Fox, es un actor canadiense-estadounidense,1​2​ ocasionalmente es cantante y músico. Su carrera en el cine y la televisión comenzó a fines de los años 70. Entre sus papeles se destacan: Marty McFly en la trilogía de Back to the Future (1985-1990); Alex P. Keaton en Family Ties (1982-1989), por la cual ganó tres premios Emmy y un Globo de Oro; y Mike Flaherty en Spin City (1996-2000), por la cual ganó un emmy, dos Globos de Oro y dos SAG. Tras iniciar su carrera como actor con el nombre de Michael Fox.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!--Fin del card-->    

<!--Inicio imagen con texto-->

<div class="textoimagen">
<div class="row g-0 bd-black position-relative">
  
    <div class="col-md-6 mb-md-0 border">
      <img src="cine.jpg" class="w-100" alt="...">
    </div>
      <div class="col-md-6 p-4 ps-md-3 border">
        <h2 class="text-white mt-0">Cinema Buenos Aires - 28 de diciembre de 1895</h2>
        <p class="text-white ms-2">Desde entonces ha experimentado una serie de cambios en varios sentidos. Por un lado, la tecnología del cinematógrafo ha evolucionado mucho, desde sus inicios con el cine mudo hasta el cine digital del siglo XXI. Por otro lado, ha evolucionado con la sociedad, con lo que se desarrollaron distintos movimientos cinematográficos..</p>
      </div>
    </div>
</div>

<!--Fin de imagen con texto-->



<!--Inicio del footer-->

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



<!--Final del footer-->    
</body>
</html>