<?php
include 'cn.php';


$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
//Consulta para insertar

if($email and $username and $password){


//$db = mysql_select_db("usuarios2",$conexion);
$consulta = "INSERT INTO usuarios2 (email,username,password) VALUES('$email','$username','$password')";
$res = mysqli_query($conexion, $consulta);

mysqli_close($conexion);
header('Location: ../../index2.php');
}
else{
  echo '<script> alert("Los datos están vacios.");</script>';
	echo '<script> window.location="signup.php";</script>';
}




 ?>
