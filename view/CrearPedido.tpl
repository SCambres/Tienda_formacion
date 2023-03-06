{include file='layout/header.tpl'}
{include file='layout/headerModuleView.tpl'}


<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h3 class="text-center mb-5 text-dark">CREAR NUEVO PEDIDO</h3>
            <div class="text-center mb-5 text-dark">INTRODUCE LOS DATOS</div>
            <div class="card my-5">

                <form id="crearPedido" class="card-body cardbody p-lg-5 " method="post" >

                    <div class="mb-3">
                        <input type="text" class="form-control" id="UserId" placeholder="Id del usuario que va a realizar el pedido">
                    </div>

                    <div class="mb-3">
                        <select id="productosElegidos" name="productos[]" class="form-control" multiple>
                        {foreach $listaProducto as $producto}
                            <option value="{$producto['Id']}">{$producto['Name']} - {$producto['Price']}€</option>
                        {/foreach}
                        </select>
                    </div>

                    <div class="mb-3">
                        <input type="text" class="form-control" id="TotalPrice" placeholder="Precio total del pedido a realizar">
                    </div>

                    <div class="mb-3">
                        <input type="datetime-local" class="form-control" id="Date" placeholder="FEcha del pedido">
                    </div>

                    <div class="text-center">
                        <button type="button" id="crearPedido" class="btn btn-dark" onclick="creacionPedido()">Guardar</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>

{include file='layout/footer.tpl'}