$(document).ready(function() {
    $('#comments_form').submit(function(e) {
        e.preventDefault();

        var name = $('#nombre').val();
        var comment = $('#comentario').val();

        if ($('#nombre').val() == "") {
            Swal.fire({
                icon: 'warning',
                title: '¡Nombre Vacío!',
                text: '¡Escribe tu nombre por favor!',
                showConfirmButton: true,
                confirmButtonColor: '#0D47A1',
                confirmButtonText: '<i class="bi bi-check-circle-fill" style="margin-right:7.5px;"></i>Aceptar'
            })
            return false;
        } else if ($('#comentario').val() == "") {
            Swal.fire({
                icon: 'warning',
                title: '¡Comentario Vacío!',
                text: '¡Por favor, escribe tu comentario!',
                showConfirmButton: true,
                confirmButtonColor: '#0D47A1',
                confirmButtonText: '<i class="bi bi-check-circle-fill" style="margin-right:7.5px;"></i>Aceptar'
            })
            return false;
        } else {
            $.ajax({
                type: "POST",
                url: "back-send-comments.php",
                data: { nombre: name, comentario: comment },
                success: function(response) {
                    if (response == 1) {
                        Swal.fire({
                            icon: 'error',
                            title: '¡Error de envío!',
                            text: 'Surgió un error al enviar tu comentario',
                            showConfirmButton: true,
                            confirmButtonColor: '#0D47A1',
                            confirmButtonText: '<i class="bi bi-repeat" style="margin-right:7.5px;"></i>Intentar de nuevo'
                        }).then(() => {
                            window.location.href = "seccion-comentarios.php";
                            $('#nombre').val('');
                            $('#comentario').val('');
                        })
                    } else {
                        Swal.fire({
                            icon: 'success',
                            title: '¡Comentario enviado!',
                            text: 'Tu comentario se envió correctamente',
                            showConfirmButton: true,
                            confirmButtonColor: '#008F39',
                            confirmButtonText: '<i class="bi bi-send-check-fill" style="margin-right:7.5px;"></i>Continuar'
                        }).then(() => {
                            window.location.href = "seccion-comentarios.php";
                            $('#nombre').val('');
                            $('#comentario').val('');
                        })
                    }
                }
            });
            return false;
        }
    });
});