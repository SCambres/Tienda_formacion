<?php

include_once("../../config/global.php");
include_once("../../model/Orders.php");
include_once("../../model/Order_lines.php");

$IdUser = $_SESSION['IdUser'];
$Date= date('Y-m-d H:i:s');
$TotalPrice = $_POST['TotalPrice'];
//number_format($TotalPrice, 2, ",", ".");

$orden = new Orders();
$orden->setUserId($IdUser);
$orden->setTotalPrice($TotalPrice);
$orden->setDate($Date);

if ($orden->create()){
    echo true;
} else {
    echo false;
}



