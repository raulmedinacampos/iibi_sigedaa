function guardarDatos() {
	$('#btnGuardar').click(function() {
		$.post(
				'alta-trabajador',
				$('#formTrabajador').serialize(),
				function(data) {
					$('#myModal .modal-title').html("Alta de trabajador");
					$('#myModal .modal-body').html(data);
					$('#myModal').modal('show');
					
					$('#myModal .modal-footer button').click(function() {
						window.location = 'nuevo-trabajador';
					});
				}
		);
	});
}

$(function() {
	guardarDatos();
});