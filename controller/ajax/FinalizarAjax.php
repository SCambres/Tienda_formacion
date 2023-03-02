<?php

include_once("../../config/global.php");
include_once("../../model/Orders.php");
include_once("../../model/Order_lines.php");
include_once("../../model/Product.php");

$IdUser = $_SESSION['IdUser'];
$Date= date('Y-m-d H:i:s');
$TotalPrice = $_POST['TotalPrice'];
//number_format($TotalPrice, 2, ",", ".");

$product = new Product();

$orden = new Orders();
$orden->setUserId($IdUser);
$orden->setTotalPrice($TotalPrice);
$orden->setDate($Date);
$orden->create();

$IdOrder = $orden->getId();

$order_lines = new Order_lines();
foreach ($_SESSION['carrito'] as $key => $carrito){

    $order_lines->setOrderId($orden->getId());
    $order_lines->setProductId($carrito['Idproduct']);
    $order_lines->setQuantity($_SESSION['carrito'][$key]['Quantity']);


    $order_lines->create();
//    var_dump($orden->getId());
//    var_dump($_SESSION['carrito'][$key]['Idproduct']);
//    var_dump($_SESSION['carrito'][$key]['Quantity']);
}
echo true;

//if ($order_lines->create()){
//    echo true;
//} else {
//    echo false;
//}



