$(document).ready(function() {
    $('#save_product').click(function() {
        if ($('#codigo').val() == "") {
            Swal.fire({
                icon: 'warning',
                title: '¡Código Vacío!',
                text: '¡Escribe un código de producto!',
                showConfirmButton: true,
                confirmButtonColor: '#0D47A1',
                confirmButtonText: '<i class="bi bi-check-circle-fill" style="margin-right:7.5px;"></i>Aceptar'
            })
            return false;
        } else if ($('#producto').val() == "") {
            Swal.fire({
                icon: 'warning',
                title: '¡Producto Vacío!',
                text: '¡Escribe un producto!',
                showConfirmButton: true,
                confirmButtonColor: '#0D47A1',
                confirmButtonText: '<i class="bi bi-check-circle-fill" style="margin-right:7.5px;"></i>Aceptar'
            })
            return false;
        } else if ($('#precio').val() == "") {
            Swal.fire({
                icon: 'warning',
                title: '¡Precio Vacío!',
                text: '¡Escribe un precio de producto!',
                showConfirmButton: true,
                confirmButtonColor: '#0D47A1',
                confirmButtonText: '<i class="bi bi-check-circle-fill" style="margin-right:7.5px;"></i>Aceptar'
            })
            return false;
        } else if ($('#cantidad').val() == "") {
            Swal.fire({
                icon: 'warning',
                title: '¡Cantidad Vacía!',
                text: '¡Escribe una cantidad en stock!',
                showConfirmButton: true,
                confirmButtonColor: '#0D47A1',
                confirmButtonText: '<i class="bi bi-check-circle-fill" style="margin-right:7.5px;"></i>Aceptar'
            })
        } else if ($('#imagen').val() == "") {
            Swal.fire({
                icon: 'question',
                title: '¡Imagen no seleccionada!',
                text: '¡Por favor, selecciona una imagen!',
                showConfirmButton: true,
                confirmButtonColor: '#0D47A1',
                confirmButtonText: '<i class="bi bi-check-circle-fill" style="margin-right:7.5px;"></i>Aceptar'
            })
            return false;
        } else {
            var formData = new FormData(document.querySelector('#newproduct_form'));
            $.ajax({
                url: "back-guardar-producto.php",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function(data) {
                    if (data == 1) {
                        Swal.fire({
                            icon: 'error',
                            title: '¡Error al registrar el producto!',
                            text: 'Ocurrió un problema al registrar el producto',
                            showConfirmButton: true,
                            confirmButtonColor: '#0D47A1',
                            confirmButtonText: '<i class="bi bi-repeat" style="margin-right:7.5px;"></i>Intentar de nuevo'
                        }).then(() => {
                            window.location.href = "nuevo-producto.php";
                            $('#codigo').val('');
                            $('#producto').val('');
                            $('#precio').val('');
                            $('#cantidad').val('');
                            $('#imagen').val('');
                        })
                    } else {
                        Swal.fire({
                            icon: 'success',
                            title: '¡Producto registrado!',
                            text: 'El producto se guardó correctamente',
                            showConfirmButton: true,
                            confirmButtonColor: '#008F39',
                            confirmButtonText: '<i class="bi bi-send-check-fill" style="margin-right:7.5px;"></i>Continuar'
                        }).then(() => {
                            window.location.href = "nuevo-producto.php";
                            $('#codigo').val('');
                            $('#producto').val('');
                            $('#precio').val('');
                            $('#cantidad').val('');
                            $('#imagen').val('');
                        })
                    }
                }
            });
            return false;
        }
    });
});