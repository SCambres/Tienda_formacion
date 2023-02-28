<?php
/* Smarty version 4.3.0, created on 2023-02-28 14:34:23
  from '/var/www/ejercicios/tienda_formacion/view/Index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63fe02df6ac770_51006478',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e90bd471e7e5001609dbb2ec0cde19b04ed20275' => 
    array (
      0 => '/var/www/ejercicios/tienda_formacion/view/Index.tpl',
      1 => 1677591262,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/header.tpl' => 1,
    'file:layout/footer.tpl' => 1,
  ),
),false)) {
function content_63fe02df6ac770_51006478 (Smarty_Internal_Template $_smarty_tpl) {
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

<table class="table mt-5">
    <tr>
        <td>Id</td>
        <td>Nombre</td>
        <td>Email</td>
        <td>Password</td>
        <td>Phone</td>
        <td>LastAcces</td>
        <td>Disabled</td>
        <td>Type</td>
    </tr>
    <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listaUser']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value['Id'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value['Name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value['Email'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value['Password'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value['Phone'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value['LastAcces'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value['Disabled'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value['Type'];?>
</td>
        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table>

<?php $_smarty_tpl->_subTemplateRender('file:layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
