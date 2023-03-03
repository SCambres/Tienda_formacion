<?php

include_once ("../../config/global.php");
include_once ("../../model/Product.php");
include_once ("../../model/Order_lines.php");
include_once ("../../model/Orders.php");


$UserId = $_POST['UserId'];
$TotalPrice = $_POST['TotalPrice'];
$productosElegidos = $_POST['productosElegidos'];
$Date = $_POST['Date'];

var_dump($productosElegidos);

$order = new Orders();
$order->setUserId($UserId);
$order->setTotalPrice($TotalPrice);
$order->setDate($Date);
if ($order->create()) {
    foreach ($productosElegidos as $productId => $quantity) {
        $orderLine = new Order_lines();
        $orderLine->setOrderId($order->getId());
        $orderLine->setProductId($productId);
        $orderLine->setQuantity($quantity);
        $orderLine->create();
    }
    echo true;
}

//if ($order->create()){
//    echo true;
//}
//echo false;






