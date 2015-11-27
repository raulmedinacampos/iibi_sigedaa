function accionesExpediente() {
	$("#dd_accion").change(function() {
		var opcion = $("#dd_accion option:selected").val();
		
		switch(opcion) {
			case '1':
				$(".modal-dialog").removeClass("modal-sm");
				$(".modal-title").html('Estado del trámite');
				$(".modal-body").load('../seguimiento/estado-del-tramite');
				$(".modal-footer .btn-default").css("display", "inline");
				$("#myModal").modal('show');
				break;
			case '2':
				break;
			case '3':
				break;
			case '4':
				break;
			default:
				break;
		}
	});
}

$(function() {
	accionesExpediente();
})