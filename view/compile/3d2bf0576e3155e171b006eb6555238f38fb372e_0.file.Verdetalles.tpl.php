<?php
/* Smarty version 4.3.0, created on 2023-02-28 15:03:07
  from '/var/www/ejercicios/tienda_formacion/view/Verdetalles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63fe099bb42737_45223973',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d2bf0576e3155e171b006eb6555238f38fb372e' => 
    array (
      0 => '/var/www/ejercicios/tienda_formacion/view/Verdetalles.tpl',
      1 => 1677592302,
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
function content_63fe099bb42737_45223973 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:layout/headerModuleView.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div>
    <table class="table mt-5">
        <tr>
            <td>Id</td>
            <td>Nombre</td>
            <td>Stock</td>
            <td>Price</td>
            <td>Image</td>

        </tr>
        <tbody>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['infoProducto']->value, 'info');
$_smarty_tpl->tpl_vars['info']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->do_else = false;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['info']->value['Id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['info']->value['Name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['info']->value['Stock'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['info']->value['Price'];?>
</td>
                <td><img src="view/img/<?php echo $_smarty_tpl->tpl_vars['info']->value['Image'];?>
"></td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        </tbody>
    </table>

</div>
<?php $_smarty_tpl->_subTemplateRender('file:layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
