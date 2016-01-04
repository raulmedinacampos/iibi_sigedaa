function validar() {
	$("#formSolicitud").validate({
		onkeyup: false,
		rules: {
			tipo_documento: {
				required: true
			},
			asunto: {
				required: true
			},
			num_oficio: {
				required: true
			},
			dirigido_a: {
				required: true
			},
			cargo: {
				required: true
			},
			remitente: {
				required: true
			}
		}
	});
}

function enviarDatos() {
	$("#btn_obtener").click(function(e) {
		e.preventDefault();
		
		if( $("#formSolicitud").valid() ) {
			$.post('guardarDoc', $("#formSolicitud").serialize(), function(data) {});
			$(".modal-dialog").addClass("modal-sm");
			$(".modal-title").html('Recepción de documentos - Información para sello');
			$(".modal-body").html('<p>Número de folio: E / ÁREA / 1234 / 2015</p><p>Recibió: ABC</p><p>Fecha de recepción: dd/mm/aaaa</p><p>Hora: hh:mm</p>');
			$(".modal-footer .btn-default").css("display", "none");
			$("#myModal").modal('show');
			
			$(".modal-footer .btn-primary").click(function() {
				$("#myModal").modal('hide');
			});
		}
	})
}

$(function() {
	validar();
	enviarDatos();
})