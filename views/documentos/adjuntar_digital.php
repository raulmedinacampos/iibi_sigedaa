<script type="text/javascript" src="../js/bootstrap-filestyle.min.js"></script>

<script type="text/javascript">
$(function() {
	var folio = "123";
	
	$('#documento').fileupload({
		formData: {'folio': folio},
	    dataType: 'json',
	    add: function (e, data) {
	        data.context = $('#btn_modal_ok')
	        	.click(function () {
	        		var envio = $('#formArchivar').serializeArray();
	        		envio.push({'folio': folio});
	        		$('#btn_modal_ok').off('click');
	        		
	        		$.post(
	        			'../documentos/adjuntar-documento-digital',
	        			{'folio': folio},
	        			function(d) {
	        				if ( d == "") {
	        					mensaje = '<p>Ocurrió un error. Intenta de nuevo en unos momentos</p>';
	        				}
	        				
	        				data.submit();
	        			}
	        		);
	            });
	    },
	    always: function (e, data) {
	    	$(".modal-dialog").addClass("modal-sm");
			$(".modal-title").html('Adjuntar documento');
			$(".modal-body").html('<p>Documento digital adjuntado</p>');
			$(".modal-footer .btn-default").css("display", "none");
			$(".modal-footer #btn_modal_ok").css("display", "none");
			$(".modal-footer #btn_modal_final").css("display", "inline");
			
			$("#btn_modal_final").click(function() {
				$("#myModal").modal('hide');
			});
	    }
	});
});
</script>

<h4>Adjuntar documento digital al folio <?php echo $folio;?></h4>

<form method="post" enctype="multipart/form-data" id="formAdjuntar" name="formAdjuntar" action="guardar-digital">
	<label>Buscar</label>
	<input type="file" id="documento" name="documento" class="filestyle" data-buttonText="Examinar" />
</form>