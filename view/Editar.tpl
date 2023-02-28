{include file='layout/header.tpl'}
{include file='layout/headerModuleView.tpl'}

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h3 class="text-center mb-5 text-dark">EDITAR PRODUCTO</h3>
            <div class="text-center mb-5 text-dark">
                {foreach $Nombre as $info}
                    <strong>{$info['Name']}</strong>
                    <span style="display: none" id="productid">{$info['Id']}</span>
                {/foreach}
            </div>
            <div class="card my-5">

                <form id="editarDatos" class="card-body cardbody p-lg-5 " method="post">

                    <div class="mb-3">
                        <input type="text" class="form-control" id="Name" placeholder="Edita el nombre">
                    </div>

                    <div class="mb-3">
                        <input type="text" class="form-control" id="Stock" placeholder="Actualiza el stock">
                    </div>

                    <div class="mb-3">
                        <input type="text" class="form-control" id="Price" placeholder="Edita el precio">
                    </div>

                    <div class="mb-3">
                        <input type="text" class="form-control" id="Image" placeholder="Editar imagen">
                    </div>

                    <div class="text-center">
                        <button type="button" id="enviarEditar" class="btn btn-dark">Guardar</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>
{include file='layout/footer.tpl'}