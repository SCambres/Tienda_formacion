<?php

class CrearpedidoController {
    function __construct(){

    }

    /**
     * @throws SmartyException
     */
    function main(){
        global $smarty;
        $product = new Product();
        $product->load_all();
        $smarty->assign("listaProducto", $product->allProduct);

        $smarty->display("CrearPedido.tpl");

    }
}