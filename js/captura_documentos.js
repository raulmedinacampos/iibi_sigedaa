function enviarDatos() {
	$("#btn_obtener").click(function(e) {
		e.preventDefault();
		
		$.post('guardaDoc_controller.php', $(formSolicitud).serialize(), function(data) {});
		$(".modal-dialog").addClass("modal-sm");
		$(".modal-title").html('Recepción de documentos - Información para sello');
		$(".modal-body").html('<p>Número de folio: E / ÁREA / 1234 / 2015</p><p>Recibió: ABC</p><p>Fecha de recepción: dd/mm/aaaa</p><p>Hora: hh:mm</p>');
		$(".modal-footer .btn-default").css("display", "none");
		$("#myModal").modal('show');
		
		$(".modal-footer .btn-primary").click(function() {
			$("#myModal").modal('hide');
		});
	})
}

$(function() {
	enviarDatos();
})