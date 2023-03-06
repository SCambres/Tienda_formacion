{include file='layout/header.tpl'}
{include file='layout/headerModuleView.tpl'}

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
        {foreach $listaOrders as $order}
            <tr id="order{$order['Id']}" data-id="{$order['Id']}">
                <td>{$order['Id']}</td>
                <td>{$order['UserId']}</td>
                <td>{$order['TotalPrice']}</td>
                <td>{$order['Date']}</td>

                <td>
                    <button type="button" class="btn btn-primary btn-group" onclick="location.href='index.php?ctrl=Detallespedido&order={$order['Id']}'">VER DETALLES</button>
                    <button type="button" class="btn btn-secondary btn-group" onclick="location.href='">EDITAR</button>
                    <button type="button" class="btn btn-danger btn-group" onclick="borrarPedido({$order['Id']})">ELIMINAR</button>
                </td>
            </tr>
        {/foreach}
        </tbody>
    </table>
    <div>
        <button type="button" class="btn btn-primary" onclick="location.href='index.php?ctrl=Crearpedido'">CREAR UN NUEVO PEDIDO</button>
    </div>

</div>

{include file='layout/footer.tpl'}