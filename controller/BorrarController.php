<?php

class BorrarController {

    function __contruct(){

    }

    function main (){
        global $smarty;
        $producto = new Product();
        $idProducto = $_GET['producto'];
        $producto->setId($idProducto);
        $producto->loadInfoProduct();
        $smarty->assign("Nombre", $producto->InfProduct);

        $smarty->display("Borrar.tpl");
    }

}