<?php
session_start();
include 'cn.php';


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


</head>
<body>
<Div class="container-fluid">
    <div class="row">
            <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                            <a class="navbar-brand" href="#">
                                    <img src="images/arbol.png" width="30" height="30" alt="logo">
                                    Electronica en linea
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
                                <a class="nav-link" href="logout.php">Cerrar sesión <span class="sr-only">(current)</span></a>


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
                              <h4 class="card-title">Arduino</h4>
                              <img src="Images/Auno.jpg" alt="Arduino" height="200" width="200">
                              <h6 class="card-subtitle text-muted"> Microcontrolador Arduino</h6>
                              <p class="card-text p-y-1">Procesador ATMega</p>
                              <a href="Articulos/Arduino.php" class="card-link">Ver producto</a>

                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="card">
                            <div class="card-block">
                              <h4 class="card-title">Microcontrolador</h4>
                              <img src="Images/PIC.jpg" alt="Arduino" height="200" width="200">
                              <h6 class="card-subtitle text-muted">PIC 18F4550</h6>
                              <p class="card-text p-y-1">Microcontrolador para desarrollo de sistemas empotrados </p>
                              <a href="Articulos/Micro.php" class="card-link">Ver producto</a>

                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="card">
                            <div class="card-block">
                              <h4 class="card-title">Bluetooth</h4>
                              <img src="Images/blue.jpg" alt="Arduino" height="200" width="200">
                              <h6 class="card-subtitle text-muted">Modelo HC-05, HC-06</h6>
                              <p class="card-text p-y-1">Interfáz Bluetooth con puerto serial</p>
                              <a href="Articulos/bluetooth.php" class="card-link">Ver producto</a>

                            </div>
                          </div>
                        </div>
                      </div><br>
                      <div class="row">
                        <div class="col-md-4">
                          <div class="card">
                            <div class="card-block">
                              <h4 class="card-title">LCD</h4>
                              <img src="Images/LCD.jpg" alt="Arduino" height="200" width="200">
                              <h6 class="card-subtitle text-muted">Pantalla LCD 2 x 16 luz verde</h6>
                              <p class="card-text p-y-1">Pantalla LCD con Headers integrados .</p>
                              <a href="Articulos/Lcd.php" class="card-link">Ver producto</a>

                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="card">
                            <div class="card-block">
                              <h4 class="card-title">Llantas para carrito velocista</h4>
                              <img src="Images/llanta.jpg" alt="Arduino" height="200" width="200">
                              <h6 class="card-subtitle text-muted">Llantas POLOLU para motor 1.6</h6>
                              <p class="card-text p-y-1">Par de llantas de goma color azul</p>
                              <a href="Articulos/llantas.php" class="card-link">Ver producto</a>

                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="card">
                            <div class="card-block">
                              <h4 class="card-title">Motor POLOLU</h4>
                              <img src="Images/pololu.jpg" alt="Arduino" height="200" width="200">
                              <h6 class="card-subtitle text-muted">Motor metálico </h6>
                              <p class="card-text p-y-1">Motor metálico de 1.6 para carrito velocista</p>
                              <a href="Articulos/Motorpololu.php" class="card-link">Ver producto</a>

                            </div>
                          </div>
                        </div>
                      </div> <br>

                          <div class="row hidden-md-up">
                            <div class="col-md-4">
                              <div class="card">
                                <div class="card-block">
                                  <h4 class="card-title">Puente H</h4>
                                  <img src="Images/puenteh.jpg" alt="Arduino" height="200" width="200">
                                  <h6 class="card-subtitle text-muted">Interfáz para par de motores</h6>
                                  <p class="card-text p-y-1">5v a 12v 1A</p>
                                  <a href="Articulos/puenteh.php" class="card-link">Ver producto</a>

                                </div>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="card">
                                <div class="card-block">
                                  <h4 class="card-title">Relevador</h4>
                                  <img src="Images/rele.png" alt="Arduino" height="200" width="200">
                                  <h6 class="card-subtitle text-muted">relevador de 12v</h6>
                                  <p class="card-text p-y-1"></p>
                                  <a href="Articulos/relevador.php" class="card-link">Ver producto</a>

                                </div>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="card">
                                <div class="card-block">
                                  <h4 class="card-title">Resistencias</h4>
                                  <img src="Images/resistencia.jpg" alt="Arduino" height="200" width="200">
                                  <h6 class="card-subtitle text-muted">Gama de Resistencias</h6>
                                  <p class="card-text p-y-1">Tenemos todas las Resistencias en disponibilidad</p>
                                  <a href="Articulos/resistencia.php" class="card-link">Ver producto</a>

                                </div>
                              </div>
                            </div>
                          </div><br>
                          <div class="row">
                            <div class="col-md-4">
                              <div class="card">
                                <div class="card-block">
                                  <h4 class="card-title">Servomotor</h4>
                                  <img src="Images/servo.jpg" alt="Arduino" height="200" width="200">
                                  <h6 class="card-subtitle text-muted">Servo de 180°</h6>
                                  <p class="card-text p-y-1">Servomotor con arnés</p>
                                  <a href="Articulos/servomotor.php" class="card-link">Ver producto</a>

                                </div>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="card">
                                <div class="card-block">
                                  <h4 class="card-title">Teclado </h4>
                                  <img src="Images/teclado.jpg" alt="Arduino" height="200" width="200">
                                  <h6 class="card-subtitle text-muted">Teclado matricial de 4x4</h6>
                                  <p class="card-text p-y-1">Teclado con arnés de conexión a 4 pines</p>
                                  <a href="Articulos/teclado.php" class="card-link">Ver producto</a>

                                </div>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="card">
                                <div class="card-block">
                                  <h4 class="card-title">Transistor</h4>
                                  <img src="Images/n2222.jpg" alt="Arduino" height="200" width="200">
                                  <h6 class="card-subtitle text-muted">Transistor 2N22222 PNP</h6>
                                  <p class="card-text p-y-1"></p>
                                  <a href="Articulos/Transistor.php" class="card-link">ver producto</a>

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

© All Rights Reserved 2019 | Alex electronics | Aplicaciones Web

</footer>
</html>
<?php
}else{
  echo '<script> window.location="index2.php"; </script>';
}
?>
