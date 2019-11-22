<?php
function sanear_string($string){
 
    $string = trim($string);
 
    $string = str_replace(
        array('á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä'),
        array('a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A'),
        $string
    );
 
    $string = str_replace(
        array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë'),
        array('e', 'e', 'e', 'e', 'E', 'E', 'E', 'E'),
        $string
    );
 
    $string = str_replace(
        array('í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î'),
        array('i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'),
        $string
    );
 
    $string = str_replace(
        array('ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô'),
        array('o', 'o', 'o', 'o', 'O', 'O', 'O', 'O'),
        $string
    );
 
    $string = str_replace(
        array('ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'),
        array('u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'),
        $string
    );
 
    $string = str_replace(
        array('ñ', 'Ñ', 'ç', 'Ç'),
        array('n', 'N', 'c', 'C',),
        $string
    );
 
    return $string;
}

include('./cn.php');

$img = $_FILES['imagen'];
$nom = $_FILES['imagen']['name'];
$temp = $_FILES['imagen']['tmp_name'];
$ruta = '../images/';


$titulo = $_POST['titulo'];
$desc = $_POST['descripcion'];
$precio = $_POST['precio'];

$nombrenuevo = $titulo.'.'.pathinfo($nom, PATHINFO_EXTENSION);
$nombrenuevo = sanear_string($nombrenuevo);

if(file_exists($ruta.$nombrenuevo)){
    unlink($ruta.$nombrenuevo);
}
    try{
        $nombrenuevo = $ruta.$nombrenuevo;
        $query="INSERT INTO `cursos`(`titulo`, `descripcion`, `precio`, `imagen`) VALUES ('$titulo','$desc','$precio','$nombrenuevo')";
        $result = $conexion->query($query);
        move_uploaded_file($temp,$nombrenuevo);
        echo 'Curso subido con exito';
    } catch (Exception $e){
        echo  json_encode($e->getMessage());
        }
?>