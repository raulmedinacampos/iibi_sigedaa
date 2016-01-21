function inicializar() {
	$('[data-toggle="tooltip"]').tooltip();
}

function autocompletar() {
	$('.typeahead').typeahead({
		source: function(query, process) {
			$.getJSON('../listado-dependencias',
					{'q': query},
					function(data) {
						process(data);
					}
			);
		}
	}); 
}

function activarOtraInstitucion() {
	var chk = $("#chk_otra_institucion");
	
	chk.click(function() {
		if( chk.is(":checked") ) {
			$("#dependencia_unam").prop("disabled", true);
			$("#otra_institucion").prop("disabled", false);
		} else {
			$("#dependencia_unam").prop("disabled", false);
			$("#otra_institucion").prop("disabled", true);
		}
	});
}

function validar() {
	$("#formSolicitud").validate({
		errorElement: 'span',
		onkeyup: false,
		rules: {
			tipo_documento: {
				required: true
			},
			asunto: {
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
			},
			dependencia_unam: {
				required: "#chk_otra_institucion:unchecked"
			},
			informacion_relevante: {
				required: true
			},
			num_hojas: {
				required: true
			},
			atender_por: {
				required: true
			}
		},
		messages: {
			tipo_documento: "Este campo es obligatorio",
			asunto: "Este campo es obligatorio",
			dirigido_a: "Este campo es obligatorio",
			cargo: "Este campo es obligatorio",
			remitente: "Este campo es obligatorio",
			dependencia_unam: "Este campo es obligatorio",
			informacion_relevante: "Este campo es obligatorio",
			num_hojas: "Este campo es obligatorio",
			atender_por: "Este campo es obligatorio"
		}
	});
}

function enviarDatos() {
	$("#btn_obtener").click(function(e) {
		e.preventDefault();
		
		if( $("#formSolicitud").valid() ) {
			$.post('guardarDoc', $("#formSolicitud").serialize(), function(data) {
				$(".modal-dialog").addClass("modal-sm");
				$(".modal-title").html('Recepción de documentos - Información para sello');
				$(".modal-body").html(data);
				$(".modal-footer .btn-default").css("display", "none");
				$("#myModal").modal('show');
				
				$(".modal-footer .btn-primary").click(function() {
					$("#myModal").modal('hide');
					window.location = "../bandejas/documentos-recibidos";
				});
			});
		}
	})
}

$(function() {
	inicializar();
	autocompletar();
	activarOtraInstitucion();
	validar();
	enviarDatos();
})