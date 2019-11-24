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
    <title>Capacitadora</title>
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
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="#"> Capacitadora online </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="index2.html">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li>
                  <a class="nav-link" href="login.php">Inicia sesión </a>
                </li>
                <li>
                  <a class="nav-link" href="signup.php">Registrate</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <center>
              <h1>Cursos Actuales</h1>
            </center>
          </div>
        <?php
              $sql = "SELECT * FROM `cursos`";
              $result = $conexion->query($sql);
              while($cards = mysqli_fetch_assoc($result)){
            ?>
          <div class="col-3">
            <div class="card" style="width: 18rem;">
              <img src="<?php echo $cards['imagen'] ?>" class="card-img-top" style="width:100%; height:250px;" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?php echo $cards['titulo'] ?></h5>
                <p class="card-text">Descripción: <?php echo $cards['descripcion'] ?></p>
                <p class="card-text">Precio: <?php echo $cards['precio'] ?></p>
                <?php if($_SESSION['tipo']=='1'){ ?>
                  <a href="curso.php/?id=<?php echo $cards['id'] ?>" class="btn btn-primary">Detalles</a>
                <?php } ?>
              </div>
            </div>
            </div>
              <?php } ?>
        </div>
      </div>

    </div>
  </body>

  <footer>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      © All Rights Reserved 2019 | Otoño 2019 | Aplicaciones Web
  </footer>

</html>
