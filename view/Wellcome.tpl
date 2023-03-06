{include file='layout/header.tpl'}
{include file='layout/headerModuleView.tpl'}

<div id="tablaPedidos">
    <table class="table mt-5">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Acciones</th>

            </tr>
        </thead>
        <tbody>
        {foreach $listaProducto as $product}
            <tr id="product{$product['Id']}" data-id="{$product['Id']}">
                <td>{$product['Id']}</td>
                <td>{$product['Name']}</td>
                <td>
                    <button type="button" class="btn btn-primary btn-group" onclick="location.href='index.php?ctrl=Detalles&producto={$product['Id']}'">VER DETALLES</button>
                    {if $smarty.session.Type == 'admin' || $smarty.session.Type == 'customer'}
                        <button type="button" class="btn btn-primary btn-group" onclick="comprarProducto({$product['Id']})">COMPRAR</button>
                        {if $smarty.session.Type == 'admin'}
                            <button type="button" class="btn btn-secondary btn-group" onclick="location.href='index.php?ctrl=Editar&producto={$product['Id']}'">EDITAR</button>
                            <button type="button" class="btn btn-danger btn-group" onclick="location.href='index.php?ctrl=Borrar&producto={$product['Id']}'">ELIMINAR</button>
                        {/if}
                    {/if}
                </td>
            </tr>
        {/foreach}
        </tbody>
    </table>
    {if $smarty.session.Type == 'admin' || $smarty.session.Type == 'customer'}
        <div>
            <button type="button" class="btn btn-primary" onclick="location.href='index.php?ctrl=Pedidos'">VER TODOS LOS PEDIDOS</button>
        </div>
        {if $smarty.session.Type == 'admin'}
            <div>
                <button type="button" class="btn btn-primary" onclick="location.href='index.php?ctrl=Crear'">AÑADIR NUEVO PRODUCTO </button>
            </div>
        {/if}
    {if isset($smarty.session.carrito) && count($smarty.session.carrito) > 0}
    <div>
        <button type="button" class="btn btn-danger" onclick="vaciarCarrito()">VACIAR CARRITO</button>
    </div>
    {/if}
    {/if}

</div>
{include file='layout/footer.tpl'}

