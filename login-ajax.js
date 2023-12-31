$('#login_form').submit(function(e) {
	e.preventDefault();
	var user_admin = $.trim($('#admin_username').val());
	var admin_pswd = $.trim($('#admin_pswd').val());

	if ($('#admin_username').val() == "") {
		Swal.fire({
			icon: 'warning',
            title: '¡Usuario Vacío!',
            text: '¡Escribe el usuario administrador!',
            showConfirmButton: true,
            confirmButtonColor: '#0D47A1',
            confirmButtonText: '<i class="bi bi-check-circle-fill" style="margin-right:7.5px;"></i>Aceptar'
		})
		return false;
	} else if ($('#admin_pswd').val() == "") {
		Swal.fire({
			icon: 'warning',
            title: '¡Contraseña Vacía!',
            text: '¡Escribe la contraseña del administrador!',
            showConfirmButton: true,
            confirmButtonColor: '#0D47A1',
            confirmButtonText: '<i class="bi bi-check-circle-fill" style="margin-right:7.5px;"></i>Aceptar'
		})
		return false;
	} else {
		$.ajax({
			url: "back-login.php",
			type: "POST",
			datatype: "json",
			data: { user:user_admin, pswd:admin_pswd },
			success: function(data) {
				if (data == "null") {
					Swal.fire({
						icon: 'error',
						title: '¡Datos incorrectos!',
						text: 'Verifica tus credenciales de acceso',
						showConfirmButton: true,
            			confirmButtonColor: '#0D47A1',
            			confirmButtonText: '<i class="bi bi-repeat" style="margin-right:7.5px;"></i>Intentar de nuevo'
					}).then(() => {
                        $('#admin_username').val('');
                        $('#admin_pswd').val('');
                    })
				} else {
					Swal.fire({
						icon: 'success',
						title: '¡Bienvenido!',
						text: 'Bienvenido a Mi Tienda Online Administrador',
						showConfirmButton: true,
            			confirmButtonColor: '#008F39',
            			confirmButtonText: '<i class="bi bi-send-check-fill" style="margin-right:7.5px;"></i>Ingresar'
					}).then((result) => {
						if (result.value) {
							window.location.href = "vista-admin.php";
						}
					})
				}
			}
		});
	}
});