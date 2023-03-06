{include file='layout/header.tpl'}
{include file='layout/headerModuleView.tpl'}

<div>
    <table class="table mt-5">
        <thead class="thead-dark">
        <tr>
            <th>Id</th>
            <th>OrderId</th>
            <th>ProductId</th>
            <th>Quantity</th>
        </tr>
        </thead>
        <tbody>

        {foreach $infoPedido as $info}
            <tr>
                <td>{$info['Id']}</td>
                <td>{$info['OrderId']}</td>
                <td>{$info['ProductId']}</td>
                <td>{$info['Quantity']}</td>

            </tr>
        {/foreach}

        </tbody>
    </table>

</div>
{include file='layout/footer.tpl'}