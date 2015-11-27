function adjuntarDigital() {
	$(".digital").click(function() {
		$(".modal-dialog").removeClass("modal-sm");
		$(".modal-title").html('Recepción de documentos - Adjuntar documento');
		$(".modal-body").load('../documentos/adjuntar-documento-digital');
		$(".modal-footer .btn-default").css("display", "inline");
		$(".modal-footer #btn_modal_ok").css("display", "inline");
		$(".modal-footer #btn_modal_final").css("display", "none");
		$("#myModal").modal('show');
		
		$(".modal-footer .btn-primary").click(function() {
			$(".modal-dialog").addClass("modal-sm");
			$(".modal-title").html('Adjuntar documento');
			$(".modal-body").html('<p>Archivo agregado satisfactoriamente</p>');
			$(".modal-footer .btn-default").css("display", "none");
			$(".modal-footer #btn_modal_ok").css("display", "none");
			$(".modal-footer #btn_modal_final").css("display", "inline");
			
			$(".modal-footer #btn_modal_final").click(function() {
				$("#myModal").modal('hide');
			});
		});
	});
}

$(function() {
	adjuntarDigital();
})