<div class="toolbar row p-2">
    <div class="wellcome col-6">
        <h2>BIENVENIDO</h2>
        {$smarty.session.Name}
    </div>

    <div id="carritoConteo" class="trolley col-6 ">
        {if empty($smarty.session.carrito)}
            <i class="fa fa-shopping-cart fa-2x"></i><span>0</span><br>
        {else}
            <a href="index.php?ctrl=Carrito"><i class="fa fa-shopping-cart fa-2x"></i><span>{count($smarty.session.carrito)}</span></a><br>
        {/if}
    </div>
</div>
<div id="logout" class="row p-2">
    <div class="col-12 text-end">
        <a href="index.php?ctrl=Logout"><i class="fa-solid fa-right-from-bracket"></i> Cerrar sesion</a>
    </div>
</div>