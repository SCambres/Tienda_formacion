{include file='layout/header.tpl'}
{include file='layout/headerModuleView.tpl'}

<table class="table mt-5">
    <tr>
        <td>Id</td>
        <td>Nombre</td>
        <td>Email</td>
        <td>Password</td>
        <td>Phone</td>
        <td>LastAcces</td>
        <td>Disabled</td>
        <td>Type</td>
    </tr>
    <tbody>
    {foreach $listaUser as $user}
        <tr>
            <td>{$user['Id']}</td>
            <td>{$user['Name']}</td>
            <td>{$user['Email']}</td>
            <td>{$user['Password']}</td>
            <td>{$user['Phone']}</td>
            <td>{$user['LastAcces']}</td>
            <td>{$user['Disabled']}</td>
            <td>{$user['Type']}</td>
        </tr>
    {/foreach}
    </tbody>
</table>

{include file='layout/footer.tpl'}

