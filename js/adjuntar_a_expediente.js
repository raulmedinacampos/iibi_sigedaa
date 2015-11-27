function integrarDocumento() {
	$("#btn_integrar").click(function() {
		$(".modal-dialog").addClass("modal-sm");
		$(".modal-title").html('Adjuntar a expediente');
		$(".modal-body").html('<p>Documento integrado al expediente</p><p>IIBI - SAD - [D] Clave (#Exp) - año</p>');
		$(".modal-footer .btn-default").css("display", "none");
		$("#myModal").modal('show');
		
		$(".modal-footer .btn-primary").click(function() {
			$("#myModal").modal('hide');
		});
	})
}

$(function() {
	integrarDocumento();
});