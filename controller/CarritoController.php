<?php

class CarritoController {

    function __contruct(){

    }

    function main (){
        global $smarty;
        $precioTotal = 0;

        if (isset($_SESSION['carrito']) && !empty($_SESSION['carrito'])){
            foreach ($_SESSION['carrito'] as $key => $carrito){
                //AÑADIMOS A CADA REGISTRO (KEY) UN CAMPO NUEVO LLAMADO SUBTOTAL
                $_SESSION['carrito'][$key]['subtotal'] = $carrito['Price'] * $carrito['Quantity'];
                $precioTotal += $_SESSION['carrito'][$key]['subtotal'] ;
            }

        }

        $smarty->assign("precioTotal", $precioTotal);

        $smarty->display("Carrito.tpl");
    }
}