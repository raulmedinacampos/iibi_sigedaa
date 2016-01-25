function inicializar() {
	$('.datepicker').datepicker({
		format: 'dd/mm/yyyy',
		language: 'es',
		orientation: 'top auto'
	});
}

function guardar() {
	$("#btnGuardar").click(function(e) {
		e.preventDefault();
		
		$.post(
				'guardar-empleado',
				$("#formEmpleado").serialize(),
				function(data) {
					
				}
		);
	});
}

$(function() {
	inicializar();
	guardar();
})