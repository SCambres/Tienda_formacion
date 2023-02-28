<?php

class IndexController{

    private Product $model;

    function __construct(){
        $this->model = new Product();

    }

    /**
     * @throws SmartyException
     */
    function main() {
        global $smarty;
        $user = new Users();
        $user->load_all();
        $smarty->assign("listaUser", $user->allUsers);
        $smarty->display("Index.tpl");

    }
}