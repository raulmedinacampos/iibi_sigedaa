function abrirOpcion() {
	$("#dd_opc").change(function() {
		var opcion = $("#dd_opc option:selected").val();
		
		switch(opcion) {
		case '1':  // Abrir expediente
			$(".modal-dialog").removeClass("modal-sm");
			$(".modal-title").html('Apertura y ubicación del expediente');
			$(".modal-body").load('abrir-expediente');
			$(".modal-footer .btn-default").css("display", "inline");
			$(".modal-footer #btn_modal_ok").css("display", "inline");
			$(".modal-footer #btn_modal_final").css("display", "none");
			$("#myModal").modal('show');
			
			$("#btn_modal_ok").click(function() {
				$(".modal-dialog").addClass("modal-sm");
				$(".modal-title").html('Apertura de expediente');
				$(".modal-body").html('<p>Se aperturó el expediente:</p><p>IIBI - SAD - [D] Clave (#Exp) - año</p>');
				$(".modal-footer .btn-default").css("display", "none");
				$(".modal-footer #btn_modal_ok").css("display", "none");
				$(".modal-footer #btn_modal_final").css("display", "inline");
				
				$("#btn_modal_final").click(function() {
					$("#myModal").modal('hide');
				});
			});
			break;
		case '2':  // Adjuntar a expediente
			window.location = "adjuntar-a-expediente";
			break;
		case '4':  // Enterado
			$(".modal-dialog").addClass("modal-sm");
			$(".modal-title").html('Enterado');
			$(".modal-body").html('<p>Enterado</p>');
			$(".modal-footer .btn-default").css("display", "none");
			$(".modal-footer #btn_modal_ok").css("display", "none");
			$(".modal-footer #btn_modal_final").css("display", "inline");
			$("#myModal").modal('show');
			
			$("#btn_modal_final").click(function() {
				$("#myModal").modal('hide');
			});
			break;
		case '5':  // Regresar turno
			$(".modal-dialog").addClass("modal-sm");
			$(".modal-title").html('Regresar turno');
			$(".modal-body").html('<p>Se regresó el turno al área correspondiente.</p>');
			$(".modal-footer .btn-default").css("display", "none");
			$(".modal-footer #btn_modal_ok").css("display", "none");
			$(".modal-footer #btn_modal_final").css("display", "inline");
			$("#myModal").modal('show');
			
			$("#btn_modal_final").click(function() {
				$("#myModal").modal('hide');
			});
			break;
		default:
			break;
		}
	});
}

function adjuntarDigital() {
	$(".digital").click(function() {
		$(".modal-dialog").removeClass("modal-sm");
		$(".modal-title").html('Recepción de documentos - Adjuntar documento');
		$(".modal-body").load('../documentos/adjuntar-documento-digital');
		$(".modal-footer .btn-default").css("display", "inline");
		$(".modal-footer #btn_modal_ok").css("display", "inline");
		$(".modal-footer #btn_modal_final").css("display", "none");
		$("#myModal").modal('show');
	});
}

function turnarAArea() {
	$(".turnar").click(function() {
		$(".modal-dialog").removeClass("modal-sm");
		$(".modal-title").html('Remisión de asuntos - envío de turno');
		$(".modal-body").load('../documentos/remision-de-asuntos');
		$(".modal-footer .btn-default").css("display", "inline");
		$(".modal-footer #btn_modal_ok").css("display", "inline");
		$(".modal-footer #btn_modal_final").css("display", "none");
		$("#myModal").modal('show');
		
		$("#btn_modal_ok").click(function() {
			$(".modal-dialog").addClass("modal-sm");
			$(".modal-title").html('Envío de turno');
			$(".modal-body").html('<p>Se turnó a SAD | PER | PRE | BYS | SER</p>');
			$(".modal-footer .btn-default").css("display", "none");
			$(".modal-footer #btn_modal_ok").css("display", "none");
			$(".modal-footer #btn_modal_final").css("display", "inline");
			
			$("#btn_modal_final").click(function() {
				$("#myModal").modal('hide');
			});
		});
	});
}

$(function() {
	abrirOpcion();
	adjuntarDigital();
	turnarAArea();
});