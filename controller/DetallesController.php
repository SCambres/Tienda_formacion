<?php

class DetallesController {

    function __construct(){

    }

    /**
     * @throws SmartyException
     */
    function main(){
        global $smarty;
        $producto = new Product();
        $idProducto = $_GET['producto'];
        $producto->setId($idProducto);
        $producto->loadInfoProduct();
        $smarty->assign("infoProducto", $producto->InfProduct);
        $smarty->display("Verdetalles.tpl");

    }
}