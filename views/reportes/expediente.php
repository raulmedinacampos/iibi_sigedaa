<p>Para localizar un expediente puede ingresar uno o varios datos. Considere que la búsqueda se realizará con todos los elementos ingresados.</p>
<p>Considere que los resultados de la búsqueda serán la suma de todos los elementos ingresados.</p>

<form method="post" id="formBuscador" name="formBuscador" class="form-horizontal" action="lista-de-expedientes">
	<div class="form-group">
		<label class="col-sm-2 control-label">Expediente</label>
		<div class="col-sm-4">
			IIBI - SAD - 
			<input id="" name="" class="form-control inline-2" placeholder="[D] clave asunto" /> ( 
			<input id="" name="" class="form-control inline-1" placeholder="folio" /> ) - 
			<input id="" name="" class="form-control inline-1" placeholder="año" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-4 col-sm-offset-2">
			IIBI - SAD - D 4C.2 - <input id="" name="" class="form-control inline-4" placeholder="Núm. trabajador" />
		</div>
	</div>
	
	<div class="form-group">
		<label class="col-sm-2 control-label">Trámite</label>
		<div class="col-sm-4">
			<select id="tipo_documento" name="tipo_documento" class="form-control">
				<option value="">Seleccione</option>
			</select>
		</div>
		
		<label class="col-sm-2 control-label">Descripción <span class="glyphicon glyphicon-question-sign"></span></label>
		<div class="col-sm-4">
			<textarea rows="3" id="informacion_relevante" name="informacion_relevante" class="form-control"></textarea>
		</div>
	</div>
	
	<div class="form-group">
		<label class="col-sm-2 control-label">Fecha de inicio</label>
		<div class="col-sm-3">
			<div class="input-group">
				<input id="fecha_inicio" name="fecha_inicio" class="form-control datepicker" />
				<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
			</div>
		</div>
		
		<label class="col-sm-2 col-sm-offset-1 control-label">Fecha de fin</label>
		<div class="col-sm-3">
			<div class="input-group">
				<input id="fecha_fin" name="fecha_fin" class="form-control datepicker" />
				<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
			</div>
		</div>
	</div>
	
	<div class="text-right">
		<button id="btn_regresar" name="btn_regresar" class="btn btn-default">Regresar</button>
		<button id="btn_buscar" name="btn_buscar" class="btn btn-primary">Buscar</button>
	</div>
</form>