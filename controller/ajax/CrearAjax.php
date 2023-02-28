<?php

include_once ("../../model/Product.php");
include_once ("../../config/global.php");

//Recogida de los datos del formulario a traves de la llamada AJAX
$Name = $_POST['Name'];
$Stock = $_POST['Stock'];
$Price = $_POST['Price'];

$Imagen_tmp = $_FILES["file"]["tmp_name"];

$nombre = $_FILES["file"]["name"];

$target_dir= "/ejercicios/tienda_formacion/view/img/";

$target_file = $_SERVER['DOCUMENT_ROOT'] . $target_dir . $nombre;

$uploadOk = 1;

if (move_uploaded_file($Imagen_tmp, $target_file)){
    echo "imagen cargada";
    echo 0;
} else {
    echo "no se ha cargado la imagen";
}

if (file_exists($target_file)){
    echo "La imagen ya existe.";
    $uploadOk = 0;
}

$producto = new Product();
$producto->setName($Name);
$producto->setStock($Stock);
$producto->setPrice($Price);
$producto->setImage($nombre);

$producto->create();

//PARA LIMITAR EL TIPO DE FORMATO ACEPTADO----FALTA COMPROBAR QUE FUNCIONA CORRECTAMENTE
//if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
//    echo "Formato de archivo no aceptado";
//    $uploadOk = 0;
//}

