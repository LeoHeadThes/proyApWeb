<?php
session_start();
include 'cn.php';


if(isset($_SESSION['username'])){
		echo '<script> window.location="index2Session.php";</script>';
}
  ?>

<!DOCTYPE html>
<html lang="es">
<head>
  <title>Multiples cursos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="Css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>


</head>
<body>
<Div class="container-fluid">
    <div class="row">
            <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                            <a class="navbar-brand" href="#">
                                    <img src="images/arbol.png" width="30" height="30" alt="logo">
                                    Capacitadora online
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                              <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                  <a class="nav-link" href="index2.html">Inicio <span class="sr-only">(current)</span></a>
                                </li>

                                <li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   Categorias
                                  </a>
                                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Idiomas</a>
                                        <a class="dropdown-item" href="#">Música</a>
                                        <a class="dropdown-item" href="#">Programación</a>
                                        <a class="dropdown-item" href="#">Arte</a>
                                        <a class="dropdown-item" href="#">Diseño</a>
                                        <a class="dropdown-item" href="#">Mecánica</a>
                                        <a class="dropdown-item" href="#">Electrónica</a>
                                        <a class="dropdown-item" href="#">Jardinería</a>
                                        <a class="dropdown-item" href="#">Ventas</a>
                                        <a class="dropdown-item" href="#">Ortografía</a>
                                        <a class="dropdown-item" href="#">Robotica</a>
                                        <a class="dropdown-item" href="#">Historia</a>
                                        <a class="dropdown-item" href="#">Literatura</a>


                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Promociones</a>
                                  </div>
                                </li>
                                <a class="nav-link" href="login.php">Inicia sesión <span class="sr-only">(current)</span></a>
                                <a class="nav-link" href="signup.php">Registrate <span class="sr-only">(current)</span></a>

                              </ul>
                              <form class="form-inline my-2 my-lg-0">
                                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                              </form>

                            </div>
                          </nav>
            </div>

    </div>
    <div class="row">

                    <div class="container">
                        <br>
                      <div class="row hidden-md-up">
                        <div class="col-md-4">
                          <div class="card">
                            <div class="card-block">
                              <h4 class="card-title">Curso de arduino</h4>
                              <img src="Images/Auno.jpg" alt="Arduino" height="200" width="200">
                              <h6 class="card-subtitle text-muted"> Nivel principiante</h6>
                              <p class="card-text p-y-1">Cubrimos temas de electrónica base, fundamentos, múltiples sensores y mucho más.</p>
                              <a href="Articulos/Arduino.php" class="card-link">Ver detalles</a>

                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="card">
                            <div class="card-block">
                              <h4 class="card-title">Curso de Z-Brush</h4>
                              <img src="Images/z-brush-novato.jpg" alt="Arduino" height="200" width="200">
                              <h6 class="card-subtitle text-muted">Nivel principiante</h6>
                              <p class="card-text p-y-1">En este curso aprenderás los conceptos básicos para el modelado en z-brush. </p>
                              <a href="Articulos/z-prin.php" class="card-link">Ver detalles</a>

                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="card">
                            <div class="card-block">
                              <h4 class="card-title">Curso de Fránces </h4>
                              <img src="Images/frances.jpg" alt="Arduino" height="200" width="200">
                              <h6 class="card-subtitle text-muted">Para niveles A2</h6>
                              <p class="card-text p-y-1">Pondrás a prueba tus conocimientos previos de manera personalizada</p>
                              <a href="Articulos/fran.php" class="card-link">Ver detalles</a>

                            </div>
                          </div>
                        </div>
                      </div><br>
                      <div class="row">
                        <div class="col-md-4">
                          <div class="card">
                            <div class="card-block">
                              <h4 class="card-title">Curso de autodesk maya</h4>
                              <img src="Images/maya-anim.jpg" alt="Arduino" height="200" width="200">
                              <h6 class="card-subtitle text-muted">Nivel intermedio</h6>
                              <p class="card-text p-y-1">Refinarás tus técnicas de modelado y aprenderás nuevas formas de animación.</p>
                              <a href="Articulos/maya.php" class="card-link">Ver detalles</a>

                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="card">
                            <div class="card-block">
                              <h4 class="card-title">Curso de dibujo a lapiz</h4>
                              <img src="Images/dibujo.jpg" alt="Arduino" height="200" width="200">
                              <h6 class="card-subtitle text-muted">Nivel principiante.</h6>
                              <p class="card-text p-y-1">Dibujar no es un talento innato, es una habilidad que puedes adquirir aqui.</p>
                              <a href="Articulos/lapiz.php" class="card-link">Ver detalles</a>

                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="card">
                            <div class="card-block">
                              <h4 class="card-title">Curso de Z-Brush</h4>
                              <img src="Images/z-brush-avanzado.jpg" alt="Arduino" height="200" width="200">
                              <h6 class="card-subtitle text-muted">Nivel avanzado </h6>
                              <p class="card-text p-y-1">Descubre los secretos de todas las herramientas y metodos de decimación en este curso</p>
                              <a href="Articulos/z-adv.php" class="card-link">Ver detalles</a>

                            </div>
                          </div>
                        </div>
                      </div> <br>

                          <div class="row hidden-md-up">
                            <div class="col-md-4">
                              <div class="card">
                                <div class="card-block">
                                  <h4 class="card-title">Curso de Python</h4>
                                  <img src="Images/python.jpg" alt="Arduino" height="200" width="200">
                                  <h6 class="card-subtitle text-muted">Nivel intermedio</h6>
                                  <p class="card-text p-y-1">Python es un lenguaje cada vez más popular, no te quedes atrás y dominalo.</p>
                                  <a href="Articulos/puenteh.php" class="card-link">Ver detalles</a>

                                </div>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="card">
                                <div class="card-block">
                                  <h4 class="card-title">Curso de base de datos</h4>
                                  <img src="Images/base-de-datos.jpg" alt="Arduino" height="200" width="200">
                                  <h6 class="card-subtitle text-muted">Nivel principiante</h6>
                                  <p class="card-text p-y-1">Adquiere los conocimientos necesarios para crear una base de datos bien estructurada.</p>
                                  <a href="Articulos/relevador.php" class="card-link">Ver detalles</a>

                                </div>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="card">
                                <div class="card-block">
                                  <h4 class="card-title">Curso de Inglés</h4>
                                  <img src="Images/ingles.jpg" alt="Arduino" height="200" width="200">
                                  <h6 class="card-subtitle text-muted">Para niveles B1</h6>
                                  <p class="card-text p-y-1">Forma grupos de discusión y perfecciona tu fluidez al responder.</p>
                                  <a href="Articulos/resistencia.php" class="card-link">Ver detalles</a>

                                </div>
                              </div>
                            </div>
                          </div><br>
                          <div class="row">
                            <div class="col-md-4">
                              <div class="card">
                                <div class="card-block">
                                  <h4 class="card-title">Curso de C#</h4>
                                  <img src="Images/c-shar.jpg" alt="Arduino" height="200" width="200">
                                  <h6 class="card-subtitle text-muted">Nivel principiante</h6>
                                  <p class="card-text p-y-1">Aprende las bases del lenguaje C# (sharp) online, utilizando Visual Studio y .NET</p>
                                  <a href="Articulos/servomotor.php" class="card-link">Ver detalles</a>

                                </div>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="card">
                                <div class="card-block">
                                  <h4 class="card-title">Curso de guitarra</h4>
                                  <img src="Images/guitarra.png" alt="Arduino" height="200" width="200">
                                  <h6 class="card-subtitle text-muted">Nivel principiante</h6>
                                  <p class="card-text p-y-1">Aprende a tocar guitarra de una vez por todas con este curso 100% Online</p>
                                  <a href="Articulos/teclado.php" class="card-link">Ver detalles</a>

                                </div>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="card">
                                <div class="card-block">
                                  <h4 class="card-title">Curso de Java</h4>
                                  <img src="Images/java.jpg" alt="Arduino" height="200" width="200">
                                  <h6 class="card-subtitle text-muted">Nivel intermedio</h6>
                                  <p class="card-text p-y-1">Objetivo: Dar a conocer al usuario las herramientas necesarias de JAVA para la creación de aplicaciones.</p>
                                  <a href="Articulos/Transistor.php" class="card-link">Ver detalles</a>

                                </div>
                              </div>
                            </div>
                          </div>
                        </div>


    </div>
</Div>

</body>
<footer>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">

© All Rights Reserved 2019 | Otoño 2019 | Aplicaciones Web

</footer>
</html>
