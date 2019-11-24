<?php
  session_start();

  include 'cn.php';
  $id = $_POST['id'];
  $sql = "SELECT * FROM `cursos` WHERE `id` = '$id' ";
  $result = $conexion->query($sql);
  $cards = mysqli_fetch_assoc($result);

  if(isset($_SESSION['username'])){
  //    echo "Bienvenido: " . $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Capacitadora</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
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
            <a class="navbar-brand" href="index2.php"> Capacitadora </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="index2.php">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <?php if($_SESSION['tipo']== '1'){?>
                  <li class="nav-item">
                    <a class="nav-link" href="registro_cursos.php">Registro Cursos </a>
                  </li>
                <?php } ?>
                <li class="nav-item">
                  <a class="nav-link"> <?php echo  "Bienvenido: " . $_SESSION['username'] ?> </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="logout.php">Cerrar sesión</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
      <div class="container-fluid">
      <center><h1>Curso <?php echo $cards['titulo']; ?></h1> </center>
        <div class="row">
          <div class="col-sm-4">
              <img src="<?php echo $cards['imagen'];?>" alt="..." style="width:100%; height:250px;" class="img-thumbnail">
              <br>
            </div>
          <div class="col-sm-8">
            <p><h4>Descripción:</h4><?php echo $cards['descripcion']; ?></p>
            <p><h4>Precio: $</h4><?php echo $cards['precio'] ?></p>
          </div>
        </div>

      </div>
    </div>
  </body>

  <footer>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      © All Rights Reserved 2019 | Aplicaciones Web
    </nav>
  </footer>

</html>
<?php
}else{
  echo '<script> window.location="index2.php"; </script>';
}
?>
