<?php

class CrearController {
    function __contruct(){

    }

    /**
     * @throws SmartyException
     */
    function main (){
        global $smarty;


        $smarty->display("Crear.tpl");
    }

}