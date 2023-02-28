{include file='layout/header.tpl'}
{include file='layout/headerModuleView.tpl'}

<div>
    <table class="table mt-5">
        <tr>
            <td>Id</td>
            <td>Nombre</td>
            <td>Stock</td>
            <td>Price</td>
            <td>Image</td>

        </tr>
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

