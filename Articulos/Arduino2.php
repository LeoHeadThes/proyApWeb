<?php
session_start();
include '../cn.php';


if(isset($_SESSION['username'])){
//    echo "Bienvenido: " . $_SESSION['username'];
  ?>

<!DOCTYPE html>
<html lang="es">
<head>
  <title>Electronica en linea</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="Css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
  <link rel="stylesheet" href="../Css/estilo1.css">

</head>
<body>
<Div class="container-fluid">
    <div class="row">
            <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                            <a class="navbar-brand" href="#">
                                    <img src="../Images/arbol.png" width="30" height="30" alt="logo">
                                    Electronica en linea
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                              <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                  <a class="nav-link" href="../index2.php">Inicio <span class="sr-only">(current)</span></a>
                                </li>
                                <!--<li class="nav-item">
                                  <a class="nav-link" href="#">Link</a>
                                </li>-->
                                <li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    categorias
                                  </a>
                                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Cables y conectores</a>
                                        <a class="dropdown-item" href="#">Circuitos Integrados </a>
                                        <a class="dropdown-item" href="#">Comunicación</a>
                                        <a class="dropdown-item" href="#"> Energía</a>
                                        <a class="dropdown-item" href="#">Herramientas</a>
                                        <a class="dropdown-item" href="#">Impresión 3d </a>
                                        <a class="dropdown-item" href="#">Pantallas y LCDS</a>
                                        <a class="dropdown-item" href="#">Partes y componentes</a>
                                        <a class="dropdown-item" href="#">POLOLU</a>
                                        <a class="dropdown-item" href="#">RASPBERRY </a>
                                        <a class="dropdown-item" href="#">Robotica</a>
                                        <a class="dropdown-item" href="#">Tarjetas de desarrollo</a>
                                        <a class="dropdown-item" href="#">Sensores</a>


                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Promociones</a>
                                  </div>
                                </li>


                                <a class="nav-link"><?php echo  "Bienvenido: " . $_SESSION['username'] ?>
                                </a>
                                      <a class="nav-link" href="../logout.php">Cerrar sesión <span class="sr-only">(current)</span></a>


                            </ul>
                              <form class="form-inline my-2 my-lg-0">
                                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                              </form>
                            </div>
                          </nav>
            </div>

    </div>
    <title>Arduino</title>
    <h1>Arduino</h1>
    </head>
    <body>
        <div class="divrelative">
        <img src="../Images/Auno.jpg" width="400" height="400">

        <div class="divabsolute">
            <h2>Descripción del artículo</h2>
<p  ALIGN="justify">
        position: sticky;
        An element with position: sticky; is positioned based on the user's scroll position.

        A sticky element toggles between relative and fixed, depending on the scroll position. It is positioned relative until a given offset position is met in the viewport - then it "sticks" in place (like position:fixed).
</p>
<h3>Precio:</h3>
<h4>$120.00</h4>
<P>
    <img src="../Images/shopping-cart.png" alt="Agregar al carrito " width="20" height="20">
    <a href="#"> Agregar al carrito</P> </a>
<label  for="Existencia">
    En Existencia</label>
        </div>
    </div>

<p>Datasheet del fabricante:</p>
<div class="Frame">
<iframe  height="400" width="1100" src="https://www.farnell.com/datasheets/1682209.pdf">
</iframe>
</div>
    </body>
    </html>

    <?php
    }else{
      echo '<script> window.location="Arduino.php"; </script>';
    }
    ?>
