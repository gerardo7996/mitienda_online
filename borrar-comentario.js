function borrar_comentario(id_comentario) {
	Swal.fire({
		title: '¿Deseas borrar este comentario?',
		text: "¡No podrás recuperarlo próximamente!",
        icon: 'warning',
        showDenyButton: true,
        confirmButtonColor: '#14A44D',
        denyButtonColor: '#C51162',
        confirmButtonText: '<i class="bi bi-trash-fill" style="margin-right:7.5px;"></i>Borrar comentario',
        denyButtonText: '<i class="bi bi-x-circle-fill" style="margin-right:7.5px;"></i>No borrar'
	}).then((result) => {
		if (result.isConfirmed) {
			confirmar_borrado(id_comentario)
		} else if (result.isDenied) {
			Swal.fire(
				"Eliminación cancelada", 
				"El proceso de borrado se canceló", 
				"info"
			);
		}
	});
}

function confirmar_borrado(id_comentario) {
	parametro = { id: id_comentario };
	$.ajax({
		data: parametro,
		url: "borrar-comentarios.php",
		type: "POST",
		beforeSend: function() {},
		success: function() {
			Swal.fire(
				"¡Comentario eliminado!",
				"El comentario seleccionado fue eliminado con éxito",
                "success"
			).then((result) => {
				window.location.href = 'lista-comentarios.php';
			});
		},
	});
}