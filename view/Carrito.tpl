{include file='layout/header.tpl'}
{include file='layout/headerModuleView.tpl'}
<div class="container">
    <table class="table mt-5">
        <thead class="thead-dark">
        <tr>
            <th>Nombre</th>
            <th>Cantidad</th>
            <th>Precio</th>
            <th>Precio acumulado producto</th>

        </tr>
        </thead>
        <tbody>
        {foreach $smarty.session['carrito'] as $carrito}
            {$subtotal = $carrito['Price'] * $carrito['Quantity']}
            <tr>
                <td>{$carrito['Name']}</td>
                <td>{$carrito['Quantity']}</td>
                <td>{$carrito['Price']}€</td>
                <td>{$subtotal}€</td>
            </tr>
        {/foreach}
        </tbody>
        <tbody>
            <th>Precio total del pedido</th>
                <td>{$precioTotal}€</td>
        </tbody>
    </table>
    <div>
        <button type="button" class="btn btn-primary" onclick="finalizarCompra()">FINALIZAR COMPRA</button>
        <button type="button" class="btn btn-primary" onclick="location.href='index.php?ctrl=Wellcome'">SEGUIR COMPRANDO</button>

    </div>
</div>


{include file='layout/footer.tpl'}