<?php

class DetallespedidoController {

    function __construct(){

    }

    /**
     * @throws SmartyException
     */
    function main(){
        global $smarty;
        $order = new Orders();
        $order_lines = new Order_lines();
        $idPedido = $_GET['order'];
        $order->setId($idPedido);
        $order_lines->setOrderId($idPedido);
        $order_lines->loadInfoOrdersLines();
        $smarty->assign("infoPedido", $order_lines->infoOrder_lines);
        $smarty->display("VerdetallesPedido.tpl");

    }
}