{include file='layout/header.tpl'}
{include file='layout/headerModuleView.tpl'}

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
