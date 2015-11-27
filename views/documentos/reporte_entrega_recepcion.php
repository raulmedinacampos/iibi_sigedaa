<h4>Por favor, seleccione el rango de fechas y áreas de las que desea el registro.</h4>

<form id="formBuscador" name="formBuscador" method="post" action="">
	<div class="row">
		<div class="col-sm-3">
			<label>Fecha de inicio</label>
			<div class="input-group">
				<input id="fecha_inicio" name="fecha_inicio" class="form-control datepicker" />
				<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
			</div>
		</div>
		
		<div class="col-sm-3 col-sm-offset-1">
			<label>Fecha de fin</label>
			<div class="input-group">
				<input id="fecha_fin" name="fecha_fin" class="form-control datepicker" />
				<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
			</div>
		</div>
		
		<div class="col-sm-3 col-sm-offset-1">
			<label>Áreas</label>
			<div class="checkbox">
				<label><input type="checkbox" id="chk_todas" name="chk_todas" /> Todas</label>
			</div>
			
			<div class="checkbox">
				<label><input type="checkbox" id="chk" name="chk" class="area" /> Bienes y suministros</label>
			</div>
			
			<div class="checkbox">
				<label><input type="checkbox" id="chk" name="chk" class="area" /> Personal</label>
			</div>
			
			<div class="checkbox">
				<label><input type="checkbox" id="chk" name="chk" class="area" /> Presupuesto</label>
			</div>
			
			<div class="checkbox">
				<label><input type="checkbox" id="chk" name="chk" class="area" /> Servicios generales</label>
			</div>
			
			<div class="checkbox">
				<label><input type="checkbox" id="chk" name="chk" class="area" /> Secretaría</label>
			</div>
		</div>
	</div>
	
	<div class="text-right">
		<button id="btn_generar" name="btn_generar" class="btn btn-primary">Generar reporte</button>
	</div>
</form>