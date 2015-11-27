function abrirOpcion() {
	$("#dd_opc").change(function() {
		var opcion = $("#dd_opc option:selected").val();
		
		switch(opcion) {
		case '1':
			$(".modal-dialog").removeClass("modal-sm");
			$(".modal-title").html('Apertura y ubicación del expediente');
			$(".modal-body").load('abrir-expediente');
			$(".modal-footer .btn-default").css("display", "inline");
			$("#myModal").modal('show');
			
			$(".modal-footer .btn-primary").click(function() {
				$(".modal-dialog").addClass("modal-sm");
				$(".modal-title").html('Apertura de expediente');
				$(".modal-body").html('<p>Se aperturó el expediente:</p><p>IIBI - SAD - [D] Clave (#Exp) - año</p>');
				$(".modal-footer .btn-default").css("display", "none");
				
				$(".modal-footer .btn-primary").click(function() {
					$("#myModal").modal('hide');
				});
			});
			break;
		case '2':
			window.location = "adjuntar-a-expediente";
			break;
		case '4':
			$(".modal-dialog").addClass("modal-sm");
			$(".modal-title").html('Enterado');
			$(".modal-body").html('<p>Enterado</p>');
			$(".modal-footer .btn-default").css("display", "none");
			$("#myModal").modal('show');
			
			$(".modal-footer .btn-primary").click(function() {
				$("#myModal").modal('hide');
			});
			break;
		case '5':
			$(".modal-dialog").addClass("modal-sm");
			$(".modal-title").html('Regresar turno');
			$(".modal-body").html('<p>Se regresó el turno al área correspondiente.</p>');
			$(".modal-footer .btn-default").css("display", "none");
			$("#myModal").modal('show');
			
			$(".modal-footer .btn-primary").click(function() {
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
		$("#myModal").modal('show');
		
		$(".modal-footer .btn-primary").click(function() {
			$(".modal-dialog").addClass("modal-sm");
			$(".modal-title").html('Adjuntar documento');
			$(".modal-body").html('<p>Documento digital adjuntado</p>');
			$(".modal-footer .btn-default").css("display", "none");
			
			$(".modal-footer .btn-primary").click(function() {
				$("#myModal").modal('hide');
			});
		});
	});
}

function turnarAArea() {
	$(".turnar").click(function() {
		$(".modal-dialog").removeClass("modal-sm");
		$(".modal-title").html('Remisión de asuntos - envío de turno');
		$(".modal-body").load('../documentos/remision-de-asuntos');
		$(".modal-footer .btn-default").css("display", "inline");
		$("#myModal").modal('show');
		
		$(".modal-footer .btn-primary").click(function() {
			$(".modal-dialog").addClass("modal-sm");
			$(".modal-title").html('Envío de turno');
			$(".modal-body").html('<p>Se turnó a SAD | PER | PRE | BYS | SER</p>');
			$(".modal-footer .btn-default").css("display", "none");
			
			$(".modal-footer .btn-primary").click(function() {
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