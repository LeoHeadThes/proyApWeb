<?php
  include './cn.php';
  session_start();

  $email = $_POST['email'];
  $password = $_POST['password'];

  $log = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email = '$email'");
  
  if(mysqli_num_rows($log)>0){
    $row = mysqli_fetch_array($log);
  }

  if(password_verify($password,$row['password'])){
    $_SESSION["username"] = $row['username'];
    $_SESSION["email"] = $row['email'];
    $_SESSION["password"] = $row['password'];
    $_SESSION["id"] = $row['id'];
    $_SESSION["tipo"] = $row['tipo'];
    header('Location: index2.php');
  }else{
    echo '<script> alert("Usuario o contraseña incorrectos.");</script>';
    echo '<script> window.location="login.php";</script>';
  }

 ?>
