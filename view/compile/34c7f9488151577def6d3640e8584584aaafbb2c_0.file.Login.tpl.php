<?php
/* Smarty version 4.3.0, created on 2023-02-27 12:53:55
  from '/var/www/ejercicios/tienda_formacion/view/Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63fc99d34c6544_83734573',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34c7f9488151577def6d3640e8584584aaafbb2c' => 
    array (
      0 => '/var/www/ejercicios/tienda_formacion/view/Login.tpl',
      1 => 1677498822,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/header.tpl' => 1,
    'file:layout/footer.tpl' => 1,
  ),
),false)) {
function content_63fc99d34c6544_83734573 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h3 class="text-center text-dark mt-5">LOGIN</h3>
            <div class="text-center mb-5 text-dark">Autentificate</div>
            <div class="card my-5">

                <form id="formulario" class="card-body cardbody-color p-lg-5" method="post">

                    <div class="text-center">
                        <img src="https://cdn.pixabay.com/photo/2018/09/17/23/21/imagination-3685048_960_720.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                             width="200px" alt="profile">
                    </div>

                    <div class="mb-3">
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                               placeholder="Email">
                    </div>

                    <div class="mb-3">
                        <input type="password" class="form-control" id="password" placeholder="Password">
                    </div>

                    <div class="text-center"><button type="button" id="enviar" class="btn btn-dark px-5 mb-5 w-100">Login</button></div>

                </form>
            </div>
        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
