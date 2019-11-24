<?php
  include './cn.php';


  $email = $_POST['email'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $tipo = $_POST['tipo'];

  if($email and $username and $password and $tipo){

    $password = password_hash($password, PASSWORD_DEFAULT);
    $consulta = "INSERT INTO usuarios (email,username,password,tipo) VALUES ('$email','$username','$password','$tipo')";
    $res = mysqli_query($conexion, $consulta);
    header('Location: ./index2.php');
    echo '<script> alert("Registro exitoso.");</script>';

  }
  else{
    echo '<script> alert("Los datos están vacios.");</script>';
    echo '<script> window.location="signup.php";</script>';
  }

 ?>
