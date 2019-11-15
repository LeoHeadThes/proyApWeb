<?php
session_start();
include '../cn.php';


if(isset($_SESSION['username'])){
		echo '<script> window.location="Arduino2.php";</script>';
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
  <link rel="stylesheet" href="../Css/estilo1.css">

</head>
<body>
<Div class="container-fluid">
    <div class="row">
            <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                            <a class="navbar-brand" href="#">
                                    <img src="../Images/arbol.png" width="30" height="30" alt="logo">
                                    Capacitadora online
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
                                <a class="nav-link" href="../login.php">Inicia sesión <span class="sr-only">(current)</span></a>
                                <a class="nav-link" href="../signup.php">Registrate <span class="sr-only">(current)</span></a>
                            </ul>
                              <form class="form-inline my-2 my-lg-0">
                                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                              </form>
                            </div>
                          </nav>
            </div>

    </div>
    <title>Arduino-Curso</title>
    <h1>Curso de arduino</h1>
    </head>
    <body>
        <div class="divrelative">
        <img src="../Images/Auno.jpg" width="400" height="400">

        <div class="divabsolute">
            <h2>Descripción del curso</h2>
<p  ALIGN="justify">
        Arduino proporciona un entorno de programación sencillo y potente para programar, pero además incluye las herramientas necesarias para compilar el programa y “quemar” el programa ya compilado en la memoria flash del microcontrolador. Además el  IDE nos ofrece un sistema de gestión de librerías y placas muy práctico. Como IDE es un software sencillo que carece de funciones avanzadas típicas de otros IDEs, pero suficiente para programar.
</p>
<h3>Profesor</h3>
<p>Felipe de los Santos Niños Vasquez</p>
<h3>Precio:</h3>
<h4>$120.00</h4>
<P>
    <img src="../Images/shopping-cart.png" alt="Agregar al carrito " width="20" height="20">
    <a href="#"> Agregar al carrito</P> </a>
<label  for="Existencia">
    Cupo libre</label>
        </div>
    </div>
</div>
    </body>

    </html>
