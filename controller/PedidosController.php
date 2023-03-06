<?php

class PedidosController {

    function __construct(){

    }

    /**
     * @throws SmartyException
     */
    function main() {
        global $smarty;
        $order = new Orders();
        $order_lines = new Order_lines();

        $order->load_all();
        $smarty->assign("listaOrders", $order->allOrders);
        $smarty->display("Pedidos.tpl");

    }
}