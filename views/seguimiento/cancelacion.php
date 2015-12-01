<form action="" method="post" id="formCancelarTramite" name="formCancelarTramite" class="form-horizontal">
	<div class="form-group">
		<label class="col-sm-4">Expediente</label>
		<div class="col-sm-8">IIBI - SAD - [D]fclave (12345) 2015</div>
	</div>
	
	<div class="form-group">
		<label class="col-sm-4">Apertura</label>
		<div class="col-sm-8">dd/mm/aaaa</div>
	</div>
	
	<div class="form-group">
		<label class="col-sm-4">Asunto</label>
		<div class="col-sm-8">Asunto del expediente</div>
	</div>
	
	<div class="form-group">
		<label class="col-sm-4">Fecha de cancelación</label>
		<div class="col-sm-4">
			<input type="text" id="fecha_cancelacion" name="fecha_cancelacion" class="form-control" value="<?php echo date('d/m/Y'); ?>" />
		</div>
	</div>
	
	<div class="form-group">
		<label class="col-sm-12">Favor de indicar las causas de la cancelación o terminación</label>
		<div class="col-sm-12">
			<textarea rows="3" class="form-control"></textarea>
		</div>
	</div>
</form>