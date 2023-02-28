<?php

class CarritoController {

    function __contruct(){

    }

    function main (){
        global $smarty;

        $smarty->display("Carrito.tpl");
    }
}