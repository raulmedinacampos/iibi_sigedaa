function enviarDatos() {
	$('#btn_ingreso').click(function(e) {
		e.preventDefault();
		
		$(".modal-title").html('Seguimiento de expedientes y trámites - Integración de documentos');
		$(".modal-body").html('<p>Ingresado al expediente: IIBI - SADM - [D] Clave - 1234 - 2015</p><p>Número de folio: A / ÁREA / 1234 / 2015</p><p>Capturó: ABC</p><p>Fecha de captura: dd/mm/aaaa</p><p>Hora: hh:mm</p>');
		$(".modal-footer .btn-default").css("display", "none");
		$("#myModal").modal('show');
		
		$(".modal-footer .btn-primary").click(function() {
			$("#myModal").modal('hide');
		});
	});
}

$(function() {
	enviarDatos();
})