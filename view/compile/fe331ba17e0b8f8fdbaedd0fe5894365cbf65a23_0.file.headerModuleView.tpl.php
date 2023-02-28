<?php
/* Smarty version 4.3.0, created on 2023-02-28 15:59:43
  from '/var/www/ejercicios/tienda_formacion/view/layout/headerModuleView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63fe16dfe272e8_84461822',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe331ba17e0b8f8fdbaedd0fe5894365cbf65a23' => 
    array (
      0 => '/var/www/ejercicios/tienda_formacion/view/layout/headerModuleView.tpl',
      1 => 1677596375,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63fe16dfe272e8_84461822 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="toolbar row p-2">
    <div class="wellcome col-6">
        <h2>BIENVENIDO</h2>
        <?php echo $_SESSION['Name'];?>

    </div>

    <div id="carritoConteo" class="trolley col-6 ">
        <?php if (empty($_SESSION['carrito'])) {?>
            <i class="fa fa-shopping-cart fa-2x"></i><span>0</span><br>
        <?php } else { ?>
            <a href="index.php?ctrl=Carrito"><i class="fa fa-shopping-cart fa-2x"></i><span><?php echo count($_SESSION['carrito']);?>
</span></a><br>
        <?php }?>
    </div>
</div>
<div id="logout" class="row p-2">
    <div class="col-12 text-end">
        <a href="index.php?ctrl=Logout"><i class="fa-solid fa-right-from-bracket"></i> Cerrar sesion</a>
    </div>
</div><?php }
}
