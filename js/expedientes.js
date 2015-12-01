function accionesExpediente() {
	$("#dd_accion").change(function() {
		var opcion = $("#dd_accion option:selected").val();
		
		switch(opcion) {
			case '1':
				$(".modal-dialog").removeClass("modal-sm");
				$(".modal-title").html('Estado del trámite');
				$(".modal-body").load('../seguimiento/estado-del-tramite');
				$("#btn_modal_terminar").css("display", "inline");
				$("#btn_modal_actualizar").css("display", "inline");
				$(".modal-footer .btn-default").css("display", "inline");
				$("#btn_modal_terminar").html("Cancelar o terminar trámite");
				$("#btn_modal_actualizar").html("Actualizar");
				$(".modal-footer .btn-default").html("Cerrar");
				$("#myModal").modal('show');
				break;
			case '2':
				$(".modal-dialog").removeClass("modal-sm");
				$(".modal-title").html('Modificación de datos del expediente');
				$(".modal-body").load('../archivo/modificar-expediente');
				$("#btn_modal_terminar").css("display", "none");
				$("#btn_modal_actualizar").css("display", "inline");
				$(".modal-footer .btn-default").css("display", "inline");
				$("#btn_modal_actualizar").html("Actualizar");
				$(".modal-footer .btn-default").html("Regresar");
				$("#myModal").modal('show');
				break;
			case '3':
				break;
			case '4':
				$(".modal-dialog").removeClass("modal-sm");
				$(".modal-title").html('Cancelación de trámites o solicitudes');
				$(".modal-body").load('../seguimiento/cancelar-tramite');
				$(".modal-footer .btn-default").css("display", "inline");
				$("#btn_modal_terminar").html("Cancelar trámite o cerrar expediente");
				$("#btn_modal_actualizar").html("Estado del trámite");
				$("#btn_modal_terminar").css("display", "inline");
				$("#btn_modal_actualizar").css("display", "inline");
				$(".modal-footer .btn-default").html("Cerrar");
				$("#myModal").modal('show');
				
				$("#btn_modal_actualizar").click(function() {
					$(".modal-body").load('../seguimiento/informacion-del-tramite');
					$("#btn_modal_terminar").css("display", "none");
					$("#btn_modal_actualizar").css("display", "none");
				});
				break;
			default:
				break;
		}
	});
}

$(function() {
	accionesExpediente();
})