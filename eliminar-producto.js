function aceptar_eliminacion(id_producto) {
	Swal.fire({
		title: '¿Deseas eliminar este producto?',
		text: "¡No podrás recuperarlo!",
        icon: 'warning',
        showDenyButton: true,
        confirmButtonColor: '#14A44D',
        denyButtonColor: '#C51162',
        confirmButtonText: '<i class="bi bi-trash-fill" style="margin-right:7.5px;"></i>Eliminar producto',
        denyButtonText: '<i class="bi bi-x-circle-fill" style="margin-right:7.5px;"></i>No eliminar'
	}).then((result) => {
		if (result.isConfirmed) {
			procesar_borrado(id_producto)
		} else if (result.isDenied) {
			Swal.fire(
				"Eliminación cancelada", 
				"El proceso de borrado se canceló", 
				"info"
			);
		}
	});
}

function procesar_borrado(id_producto) {
	parametro = { id: id_producto };
	$.ajax({
		data: parametro,
		url: "back-borrar-producto.php",
		type: "POST",
		beforeSend: function() {},
		success: function() {
			Swal.fire(
				"¡Producto eliminado!",
				"Este producto fue eliminado con éxito",
                "success"
			).then((result) => {
				window.location.href = 'detalle-productos.php';
				$('#products_table').load("detalle-productos.php");
			});
		},
	});
}