<?php

include_once ("../../config/global.php");
include_once ("../../model/Orders.php");
include_once ("../../model/Order_lines.php");

$Id = $_POST['Id'];

$order = new Orders();
$order_lines = new Order_lines();

$order->setId($Id);
$order_lines->setOrderId($Id);

try {
    $order_lines->delete();
    $order->delete();
    echo true;
} catch (Exception $e){
    echo false;
}