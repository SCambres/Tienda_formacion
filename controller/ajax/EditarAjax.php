<?php

include_once ("../../model/Product.php");
include_once ("../../config/global.php");

//Recogida de los datos del formulario a traves de la llamada AJAX
$Name = $_POST['Name'];
$Stock = $_POST['Stock'];
$Price = $_POST['Price'];
$Image = $_POST['Image'];
$Id = $_POST['Id'];


//Instancia del producto y seteo de sus atributos con los datos recogidos
$producto = new Product();

$producto->setName($Name);
$producto->setStock($Stock);
$producto->setPrice($Price);
$producto->setImage($Image);
$producto->setId($Id);

//Llamada a la sentencia SQL para actualizar los datos en la BD
$guardados = $producto->save();

if ($guardados){
    echo true;
} echo false;

