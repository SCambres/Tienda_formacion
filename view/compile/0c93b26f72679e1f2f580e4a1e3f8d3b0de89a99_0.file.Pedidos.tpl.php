<?php
/* Smarty version 4.3.0, created on 2023-03-02 10:39:53
  from '/var/www/ejercicios/tienda_formacion/view/Pedidos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64006ee962d146_88820104',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c93b26f72679e1f2f580e4a1e3f8d3b0de89a99' => 
    array (
      0 => '/var/www/ejercicios/tienda_formacion/view/Pedidos.tpl',
      1 => 1677748998,
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
function content_64006ee962d146_88820104 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:layout/headerModuleView.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div>
    <table class="table mt-5">
        <thead class="thead-dark">
        <tr>
            <th>Id</th>
            <th>UserId</th>
            <th>TotalPrice</th>
            <th>Date</th>
            <th>Acciones</th>

        </tr>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listaOrders']->value, 'order');
$_smarty_tpl->tpl_vars['order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->do_else = false;
?>
            <tr id="order<?php echo $_smarty_tpl->tpl_vars['order']->value['Id'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['order']->value['Id'];?>
">
                <td><?php echo $_smarty_tpl->tpl_vars['order']->value['Id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['order']->value['UserId'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['order']->value['TotalPrice'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['order']->value['Date'];?>
</td>

                <td>
                    <button type="button" class="btn btn-primary btn-group" onclick="comprarProducto(<?php echo $_smarty_tpl->tpl_vars['order']->value['Id'];?>
)">VER DETALLES</button>
                    <button type="button" class="btn btn-secondary btn-group" onclick="comprarProducto(<?php echo $_smarty_tpl->tpl_vars['order']->value['Id'];?>
)">EDITAR</button>
                    <button type="button" class="btn btn-danger btn-group" onclick="comprarProducto(<?php echo $_smarty_tpl->tpl_vars['order']->value['Id'];?>
)">ELIMINAR</button>
                    <button type="button" class="btn btn-primary btn-group" onclick="comprarProducto(<?php echo $_smarty_tpl->tpl_vars['order']->value['Id'];?>
)">COMPRAR</button>
                </td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>

</div>




<?php $_smarty_tpl->_subTemplateRender('file:layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}