<?php
/* Smarty version 4.3.0, created on 2023-02-28 14:35:14
  from '/var/www/ejercicios/tienda_formacion/view/Borrar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63fe0312b06ad7_53955881',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22ec6a67f199bb6c10e958f09b90a7233cdadf04' => 
    array (
      0 => '/var/www/ejercicios/tienda_formacion/view/Borrar.tpl',
      1 => 1677591311,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/header.tpl' => 1,
    'file:layout/footer.tpl' => 1,
  ),
),false)) {
function content_63fe0312b06ad7_53955881 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="toolbar row p-2">
    <div class="wellcome col-6">
        <h2>BIENVENIDO</h2>
        <?php echo $_SESSION['Name'];?>

    </div>

    <div id="carritoConteo" class="trolley col-6 ">
        <?php if (empty($_SESSION['carrito'])) {?>
            <i class="fa fa-shopping-cart fa-2x"></i><span>0</span><br>
        <?php } else { ?>
            <a href=""><i class="fa fa-shopping-cart fa-2x"></i><span><?php echo count($_SESSION['carrito']);?>
</span></a><br>
        <?php }?>
    </div>
</div>
<div id="logout" class="row p-2">
    <div class="col-12 text-end">
        <a href="index.php?ctrl=Logout"><i class="fa-solid fa-right-from-bracket"></i> Cerrar sesion</a>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h3 class="text-center mb-5 text-dark">¿DESEAS BORRAR EL SIGUIENTE PRODUCTO?</h3>
            <div class="text-center mb-5 text-dark">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Nombre']->value, 'info');
$_smarty_tpl->tpl_vars['info']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->do_else = false;
?>
                    <strong><?php echo $_smarty_tpl->tpl_vars['info']->value['Name'];?>
</strong>
                    <span style="display: none" id="productid"><?php echo $_smarty_tpl->tpl_vars['info']->value['Id'];?>
</span>
                    <span style="display: none" id="imagen"><?php echo $_smarty_tpl->tpl_vars['info']->value['Image'];?>
</span>
                    <img src="view/img/<?php echo $_smarty_tpl->tpl_vars['info']->value['Image'];?>
" >
                    <button type="button" id="enviarBorrar" class="btn btn-dark">BORRAR</button>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>

        </div>
    </div>
</div>


<?php $_smarty_tpl->_subTemplateRender('file:layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
