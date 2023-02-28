{include file='layout/header.tpl'}
<div class="toolbar row p-2">
    <div class="wellcome col-6">
        <h2>BIENVENIDO</h2>
        {$smarty.session.Name}
    </div>

    <div id="carritoConteo" class="trolley col-6 ">
        {if empty($smarty.session.carrito)}
            <i class="fa fa-shopping-cart fa-2x"></i><span>0</span><br>
        {else}
            <a href=""><i class="fa fa-shopping-cart fa-2x"></i><span>{count($smarty.session.carrito)}</span></a><br>
        {/if}
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
                {foreach $Nombre as $info}
                    <strong>{$info['Name']}</strong>
                    <span style="display: none" id="productid">{$info['Id']}</span>
                    <span style="display: none" id="imagen">{$info['Image']}</span>
                    <img src="view/img/{$info['Image']}" >
                    <button type="button" id="enviarBorrar" class="btn btn-dark">BORRAR</button>
                {/foreach}
            </div>

        </div>
    </div>
</div>


{include file='layout/footer.tpl'}
