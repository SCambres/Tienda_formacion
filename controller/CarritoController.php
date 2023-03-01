<?php

class CarritoController {

    function __contruct(){

    }

    function main (){
        global $smarty;
        $precioTotal = 0;

        if (isset($_SESSION['carrito']) && !empty($_SESSION['carrito'])){
            foreach ($_SESSION['carrito'] as $carrito){

                $subtotal= $carrito['Price'] * $carrito['Quantity'];
                $precioTotal += $subtotal;
            }
        }

        $smarty->assign("precioTotal", $precioTotal);

        $smarty->display("Carrito.tpl");
    }
}