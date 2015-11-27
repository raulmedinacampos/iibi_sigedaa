function enviarDatos() {
	$("#btn_generar").click(function() {
		$(".modal-dialog").addClass("modal-sm");
		$(".modal-title").html('Folio de salida');
		$(".modal-body").html('<p>El número de oficio es: <strong>IIBI / SAD / folio / año</strong></p>');
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