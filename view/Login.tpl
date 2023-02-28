{include file="layout/header.tpl"}

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h3 class="text-center text-dark mt-5">LOGIN</h3>
            <div class="text-center mb-5 text-dark">Autentificate</div>
            <div class="card my-5">

                <form id="formulario" class="card-body cardbody-color p-lg-5" method="post">

                    <div class="text-center">
                        <img src="https://cdn.pixabay.com/photo/2018/09/17/23/21/imagination-3685048_960_720.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                             width="200px" alt="profile">
                    </div>

                    <div class="mb-3">
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                               placeholder="Email">
                    </div>

                    <div class="mb-3">
                        <input type="password" class="form-control" id="password" placeholder="Password">
                    </div>

                    <div class="text-center"><button type="button" id="enviar" class="btn btn-dark px-5 mb-5 w-100">Login</button></div>

                </form>
            </div>
        </div>
    </div>
</div>

{include file="layout/footer.tpl"}