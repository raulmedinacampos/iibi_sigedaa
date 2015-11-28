<p>Para localizar un expediente puede ingresar uno o varios datos. Considere que la búsqueda se realizará con todos los elementos ingresados.</p>
<p>Considere que los resultados de la búsqueda serán la suma de todos los elementos ingresados.</p>

<form action="lista-de-expedientes" method="post" id="formBuscador" name="formBuscador" class="form-horizontal">
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
		<input type="submit" id="btn_buscar" name="btn_buscar" value="Buscar" class="btn btn-primary" />
	</div>
</form>