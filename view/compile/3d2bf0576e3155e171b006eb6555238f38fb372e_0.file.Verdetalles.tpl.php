<?php
/* Smarty version 4.3.0, created on 2023-03-01 11:14:11
  from '/var/www/ejercicios/tienda_formacion/view/Verdetalles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63ff257379d9a5_81756499',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d2bf0576e3155e171b006eb6555238f38fb372e' => 
    array (
      0 => '/var/www/ejercicios/tienda_formacion/view/Verdetalles.tpl',
      1 => 1677665648,
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
function content_63ff257379d9a5_81756499 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:layout/headerModuleView.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div>
    <table class="table mt-5">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Stock</th>
                <th>Price</th>
                <th>Image</th>
            </tr>
        </thead>
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
