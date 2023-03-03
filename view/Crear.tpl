{include file='layout/header.tpl'}
{include file='layout/headerModuleView.tpl'}


<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h3 class="text-center mb-5 text-dark">CREAR NUEVO PRODUCTO</h3>
            <div class="text-center mb-5 text-dark">INTRODUCE LOS DATOS</div>
            <div class="card my-5">

                <form id="crearProducto" class="card-body cardbody p-lg-5 " method="post" enctype="multipart/form-data">

                    <div class="mb-3">
                        <input type="text" class="form-control" id="Name" placeholder="Nombre del producto">
                    </div>

                    <div class="mb-3">
                        <input type="text" class="form-control" id="Stock" placeholder="Stock del producto">
                    </div>

                    <div class="mb-3">
                        <input type="text" class="form-control" id="Price" placeholder="Precio del producto">
                    </div>

                    <div class="mb-3">
                        <input type="file" class="form-control" id="fileToUpload" placeholder="Cargar imagen del producto">
                    </div>

                    <div class="text-center">
                        <button type="button" id="crear" class="btn btn-dark">Guardar</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>

{include file='layout/footer.tpl'}