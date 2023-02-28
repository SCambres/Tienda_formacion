<?php

class WellcomeController{

    private Product $model;

    function __construct(){
//        $this->model = new Users();
    }

    /**
     * @throws SmartyException
     */
    function main() {
        global $smarty;
        $producto = new Product();
        $producto->load_all();
        $smarty->assign("listaProducto", $producto->allProduct);
        $smarty->display("Wellcome.tpl");

    }
}