<?php

class EditarController {

    function __contruct(){

    }

    function main (){
        global $smarty;

        $producto = new Product();
        //para traer el nombre del producto a editar
        $idProducto = $_GET['producto'];
        $producto->setId($idProducto);
        $producto->loadInfoProduct();
        $smarty->assign("Nombre", $producto->InfProduct);


        //para actualizar los datos de dicho producto
        $smarty->display("Editar.tpl");
    }
}