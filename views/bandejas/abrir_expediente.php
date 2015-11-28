<h4>Elegir clave del cuadro de clasificación archivística</h4>

<form method="post" id="formExpediente" name="formExpediente" action="">
	<label>Trámite</label>
	<select id="tramite" name="tramite" class="form-control">
		<option value="">Seleccione</option>
	</select>
	
	<div class="row">
		<div class="col-sm-12 text-right">
			<button class="btn btn-default btn-sm">Agregar otro</button>
		</div>
	</div>
	
	<div class="row">
		<div class="col-sm-4">
			<label>Sección</label>
			<select id="seccion" name="seccion" class="form-control">
				<option value="">Seleccione</option>
			</select>
		</div>
		
		<div class="col-sm-4">
			<label>Serie</label>
			<select id="serie" name="serie" class="form-control">
				<option value="">Seleccione</option>
			</select>
		</div>
		
		<div class="col-sm-4">
			<label>Subserie</label>
			<select id="subserie" name="subserie" class="form-control">
				<option value="">Seleccione</option>
			</select>
		</div>
		
		<div class="col-sm-12 text-right">
			<a href="#">Ver cuadro de clasificación archivística</a>
		</div>
	</div>
	
	<label>Descripción del expediente</label>
	<textarea rows="3" class="form-control" placeholder="Escriba palabras clave para identificar el expediente"></textarea>
	
	<label>Ubicación física</label>
	<textarea rows="3" class="form-control"></textarea>
</form>