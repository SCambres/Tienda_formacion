<?php
/* Smarty version 4.3.0, created on 2023-02-28 16:07:45
  from '/var/www/ejercicios/tienda_formacion/view/Wellcome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63fe18c1d433c4_96572337',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e0e725aca9f9044c7834a0d05be3d2271dff391' => 
    array (
      0 => '/var/www/ejercicios/tienda_formacion/view/Wellcome.tpl',
      1 => 1677596841,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/header.tpl' => 1,
    'file:layout/headerModuleView.tpl' => 1,
    'file:layout/footer.tpl' => 1,
  ),
),false)) {
function content_63fe18c1d433c4_96572337 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:layout/headerModuleView.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div>
    <table class="table mt-5">
        <tr>
            <td>Id</td>
            <td>Nombre</td>
            <td>Acciones</td>

        </tr>
        <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listaProducto']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
            <tr id="product<?php echo $_smarty_tpl->tpl_vars['product']->value['Id'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['product']->value['Id'];?>
">
                <td><?php echo $_smarty_tpl->tpl_vars['product']->value['Id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['product']->value['Name'];?>
</td>
                <td>
                    <button type="button" class="btn-primary btn-group" onclick="location.href='index.php?ctrl=Detalles&producto=<?php echo $_smarty_tpl->tpl_vars['product']->value['Id'];?>
'">VER DETALLES</button>
                    <button type="button" class="btn-secondary btn-group" onclick="location.href='index.php?ctrl=Editar&producto=<?php echo $_smarty_tpl->tpl_vars['product']->value['Id'];?>
'">EDITAR</button>
                    <button type="button" class="btn-danger btn-group" onclick="location.href='index.php?ctrl=Borrar&producto=<?php echo $_smarty_tpl->tpl_vars['product']->value['Id'];?>
'">ELIMINAR</button>
                    <button type="button" class="btn-primary btn-group" onclick="comprarProducto(<?php echo $_smarty_tpl->tpl_vars['product']->value['Id'];?>
)">COMPRAR</button>
                </td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
    <div>
        <button type="button" class="btn-primary" onclick="location.href='index.php?ctrl=Crear'">AÑADIR NUEVO PRODUCTO </button>
    </div>

</div>
<?php $_smarty_tpl->_subTemplateRender('file:layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php }
}