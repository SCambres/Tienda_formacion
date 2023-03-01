{include file='layout/header.tpl'}
{include file='layout/headerModuleView.tpl'}

<div>
    <table class="table mt-5">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Stock</th>
                <th>Price</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>

        {foreach $infoProducto as $info}
            <tr>
                <td>{$info['Id']}</td>
                <td>{$info['Name']}</td>
                <td>{$info['Stock']}</td>
                <td>{$info['Price']}</td>
                <td><img src="view/img/{$info['Image']}"></td>
            </tr>
        {/foreach}

        </tbody>
    </table>

</div>
{include file='layout/footer.tpl'}

