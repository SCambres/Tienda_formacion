<?php

class LogoutController {

    function __construct() {

    }

    /**
     * @throws SmartyException
     */

    function main (){
        global $smarty;
        session_unset();
        session_destroy();

       $smarty->display("Login.tpl");

    }

}