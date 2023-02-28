$(document).ready(function (){

    //FUNCION LOGIN
        $("#enviar").click(function(){
            var email = $('#email').val();
            var password = $('#password').val();

            $.ajax({
                type: 'POST',
                url: 'controller/ajax/LoginAjax.php',
                data: {email: email, password: password},
                success: function (data){
                    if (data){
                        window.location.assign('/ejercicios/tienda_formacion/index.php?ctrl=Wellcome');
                    } else {
                        alert('Email o contraseña incorrectos');
                    }
                },
                error: function (){
                    alert('Fallo en la llamada a Ajax');
                }
            });
        });

        //FUNCION ACTUALIZAR DATOS PRODUCTO
    $("#enviarEditar").click(function(){
        var Name = $('#Name').val();
        var Stock = $('#Stock').val();
        var Price = $('#Price').val();
        var Image = $('#Image').val();
        var Id = $('#productid').html();

        $.ajax({
            type: 'POST',
            url: 'controller/ajax/EditarAjax.php',
            data: {Name: Name, Stock: Stock, Price: Price, Image: Image, Id: Id},
            success: function (data){
                if (data){
                    alert('Datos actualizados correctamente');
                    window.location.href = '/ejercicios/tienda_formacion/index.php?ctrl=Wellcome';
                } else {
                    alert('Datos mal actualizados');
                }
            },
            error: function (){
                alert('Fallo en la llamada a Ajax');
            }
        });
    });

    //FUNCION PARA CREAR UN PRODUCTO NUEVO
    $("#crear").click(function(){
        var formData = new FormData();

        var Name = $('#Name').val();
        var Stock = $('#Stock').val();
        var Price = $('#Price').val();
        var files = $('#fileToUpload')[0].files[0];

        formData.append('Name', Name);
        formData.append('Stock', Stock);
        formData.append('Price', Price);
        formData.append('file', files);

        $.ajax({
            type: 'POST',
            url: 'controller/ajax/CrearAjax.php',
            data: formData,
            processData: false,
            contentType: false,
            success: function (data){
                if (data=!0){
                    window.location.href = '/ejercicios/tienda_formacion/index.php?ctrl=Wellcome';
                    alert('Producto creado de forma exitosa');
                } else {
                    alert('No se ha podido crear el producto');
                }
            },
            error: function (){
                alert('Fallo en la llamada a Ajax');
            }
        });
    });

    //FUNCION PARA BORRAR UN PRODUCTO GUARDADO
    $("#enviarBorrar").click(function(){
        var Id = $('#productid').html();
        var Imagen = $('#imagen').html();

        $.ajax({
            type: 'POST',
            url: 'controller/ajax/BorrarAjax.php',
            data: {Id: Id, Imagen: Imagen},
            success: function (data){
                if (data){
                    window.location.href = '/ejercicios/tienda_formacion/index.php?ctrl=Wellcome';
                    alert('Producto borrado de forma exitosa');
                } else {
                    alert('No se ha podido borrar el producto');
                }
            },
            error: function (){
                alert('Fallo en la llamada a Ajax');
            }
        });
    });
})

function comprarProducto(Id) {
    $.ajax({
        type: 'POST',
        url: 'controller/ajax/ComprarAjax.php',
        data: {Id: Id},
        success: function (response){
            if (response){
                $('#carritoConteo').html(
                    '<a href=""><i class="fa fa-shopping-cart fa-2x"></i><span>'+response+'</span></a>'
                );
                alert('Producto añadido al carrito');
            } else {
                alert('No se ha podido añadir al carrito');
            }
        },
        error: function (){
            alert('Fallo en la llamada a Ajax');
        }
    });
}

//ERROR A REVISAR QUE DICE QUE EL EVENTO  LISTENER DE ENVIAR ES NULL
// const enviar = document.getElementById("enviar");
// const usuario = document.getElementById("email");
// const clave = document.getElementById("password");
//
// const emailValido = /^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/;
//
// enviar.addEventListener("click", validar);
//
// function validar(e){
//     e.preventDefault();
//
//     if (emailValido.test(usuario.value)){
//         alert("Email valido");
//         console.log(usuario.value);
//         return true;
//     } else {
//         mostrarError(usuario, "Introduce una direccion de correo valida");
//         return false;
//     }
// }
//
// function mostrarError(elemento, mensaje){
//     const mensajeError = document.createElement("span");
//     mensajeError.classList.add("error");
//     mensajeError.textContent = mensaje;
//     elemento.insertAdjacentElement("afterend", mensajeError);
// }


