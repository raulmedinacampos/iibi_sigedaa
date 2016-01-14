<p>Expedientes del área: Nombre del área<br />
Total de expedientes en trámite: nn</p>
<form action="" method="post" id="formExpedientes" name="formExpedientes" class="form-horizontal">
	<div class="form-group">
		<label class="col-sm-2 control-label">Ordenar por:</label>
		<div class="col-sm-3">
			<select id="ordenar" name="ordenar" class="form-control">
				<option value="">Seleccione</option>
				<option value="">Fecha asc</option>
				<option value="">Fecha desc</option>
				<option value="">Asunto</option>
				<option value="">Estado</option>
			</select>
		</div>
	</div>

	<table class="table table-striped table-condensed">
		<tr>
			<th>Núm.</th>
			<th>Núm. de expediente</th>
			<th>Asunto</th>
			<th>Fecha de apertura</th>
			<th>Estado</th>
			<th>Ubicación</th>
		</tr>
		<tr>
			<td>1</td>
			<td>IIBI - SAD - [D] CVe-(nnn)-2015</td>
			<td>Asunto 1</td>
			<td>dd/mm/aaaa
			<td>En trámite</td>
			<td>Por asignar</td>
		</tr>
		<tr>
			<td>2</td>
			<td>IIBI - SAD - [D] CVe-(nnn)-2015</td>
			<td>Asunto 2</td>
			<td>dd/mm/aaaa
			<td>En trámite</td>
			<td>Estante 1</td>
		</tr>
		<tr>
			<td>3</td>
			<td>IIBI - SAD - [D] CVe-(nnn)-2015</td>
			<td>Asunto 3</td>
			<td>dd/mm/aaaa
			<td>Terminado</td>
			<td>Cajón 2</td>
		</tr>
		<tr>
			<td>4</td>
			<td>IIBI - SAD - [D] CVe-(nnn)-2015</td>
			<td>Asunto 4</td>
			<td>dd/mm/aaaa
			<td>Cancelado</td>
			<td>Librero 1</td>
		</tr>
	</table>
	
	<div class="text-right">
		<button class="btn btn-primary">Buscar expediente</button>
	</div>
</form>