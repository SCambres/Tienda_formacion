<?php

include_once ("../../model/Product.php");
include_once ("../../config/global.php");

$Id = $_POST['Id'];
$Imagen = $_POST['Imagen'];

$target_dir = "/ejercicios/tienda_formacion/view/img/";

$target_file = $_SERVER['DOCUMENT_ROOT'] . $target_dir . $Imagen;

unlink($target_file);

$producto = new Product();

$producto->setId($Id);

$guardados = $producto->delete();

if ($guardados){
    echo true;
} else {
    echo false;
}
