<?php
  include './cn.php';


  $email = $_POST['email'];
  $username = $_POST['username'];
  $password = $_POST['password'];

  if($email and $username and $password){

    $password = password_hash($password, PASSWORD_DEFAULT);
    $consulta = "INSERT INTO usuarios (email,username,password) VALUES ('$email','$username','$password')";
    $res = mysqli_query($conexion, $consulta);
    echo '<script> alert("Registro exitoso.");</script>';
    header('Location: ./index2.php');

  }
  else{
    echo '<script> alert("Los datos están vacios.");</script>';
    echo '<script> window.location="signup.php";</script>';
  }

 ?>
