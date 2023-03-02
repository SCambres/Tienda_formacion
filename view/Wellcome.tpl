{include file='layout/header.tpl'}
{include file='layout/headerModuleView.tpl'}

<div>
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
                    <button type="button" class="btn btn-secondary btn-group" onclick="location.href='index.php?ctrl=Editar&producto={$product['Id']}'">EDITAR</button>
                    <button type="button" class="btn btn-danger btn-group" onclick="location.href='index.php?ctrl=Borrar&producto={$product['Id']}'">ELIMINAR</button>
                    <button type="button" class="btn btn-primary btn-group" onclick="comprarProducto({$product['Id']})">COMPRAR</button>
                </td>
            </tr>
        {/foreach}
        </tbody>
    </table>
    <div>
        <button type="button" class="btn btn-primary" onclick="location.href='index.php?ctrl=Crear'">AÑADIR NUEVO PRODUCTO </button>
    </div>
    <div>
        <button type="button" class="btn btn-primary" onclick="location.href='index.php?ctrl=Pedidos'">VER TODOS LOS PEDIDOS</button>
    </div>

</div>
{include file='layout/footer.tpl'}

{*ESTE CODIGO GENERA UNA TABLA CON TODA LA INFO DE PRODUCTOS*}
{*<table class="table mt-5">*}
{*    <tr>*}
{*        <td>Id</td>*}
{*        <td>Nombre</td>*}
{*        <td>Stock</td>*}
{*        <td>Price</td>*}
{*        <td>Image</td>*}

{*    </tr>*}
{*    <tbody>*}
{*    {foreach $listaProducto as $product}*}
{*        <tr>*}
{*            <td>{$product['Id']}</td>*}
{*            <td>{$product['Name']}</td>*}
{*            <td>{$product['Stock']}</td>*}
{*            <td>{$product['Price']}</td>*}
{*            <td>{$product['Image']}</td>*}
{*        </tr>*}
{*    {/foreach}*}
{*    </tbody>*}
{*</table>*}