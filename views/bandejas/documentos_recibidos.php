<p>A continuación se presenta la lista de los documentos que requieren
	su atención, los que fueron registrados por su área y los que le fueron
	turnados.</p>

<table class="table table-striped table-condensed">
<?php
if ( mysqli_num_rows($documento[1]) > 0 ) {
?>
	<tr>
		<th>Folio</th>
		<th>Tipo de documento</th>
		<th>Asunto</th>
		<th>Fecha</th>
		<th>Procedencia</th>
		<th>Acción</th>
	</tr>
	<tr>
		<td><a href="#">E/SAD/001/2015</a></td>
		<td>Asunto área (apoyo)</td>
		<td>Descripción</td>
		<td>dd/mm/aa</td>
		<td>siglas del área</td>
		<td>
			<select id="dd_opc" name="dd_opc" class="form-control input-sm">
				<option value="">Seleccione</option>
				<option value="1">Abrir expediente</option>
				<option value="2">Adjuntar a expediente</option>
				<option value="3">Adjuntar a expediente de trabajador</option>
				<option value="4">Enterado</option>
				<option value="5">Regresar turno</option>
			</select>
		</td>
	</tr>
	<tr>
		<td><a href="#">E/SAD/001/2015</a></td>
		<td>Asunto área (apoyo)</td>
		<td>Descripción</td>
		<td>dd/mm/aa</td>
		<td>---</td>
		<td><span class="btn btn-default btn-sm turnar">Turnar a área</span></td>
	</tr>
	<tr>
		<td><a href="#">E/SAD/001/2015</a></td>
		<td>Asunto área (apoyo)</td>
		<td>Descripción</td>
		<td>dd/mm/aa</td>
		<td>---</td>
		<td><span class="btn btn-default btn-sm digital">Adjuntar digital</span></td>
	</tr>
	<?php
	while ( $row = mysqli_fetch_assoc($documento[1]) ) {
	?>
	<tr>
		<td><a href="#"><?php echo $row['folio']; ?></a></td>
		<td><?php echo $row['tipoDocumental']; ?></td>
		<td><?php echo $row['asunto']; ?></td>
		<td><?php echo $row['fechaAlta']; ?></td>
		<td><?php echo $row['area']; ?></td>
		<td><?php
		
		if($row['estatus'] == 1){
			?><span class="btn btn-default btn-sm digital">Adjuntar digital</span></td><?php 
		} else {?>
		
		
			<select id="dd_opc" name="dd_opc" class="form-control input-sm">
			<option value="">Seleccione</option>
			<option value="1">Abrir expediente</option>
			<option value="2">Adjuntar a expediente</option>
			<option value="3">Adjuntar a expediente de trabajador</option>
			<option value="4">Enterado</option>
			<option value="5">Regresar turno</option>
			</select>
		
		<?php
		}?>
	</tr>
	<?php
	}
} else {
?>
	<tr>
		<td>No hay documentos disponibles</td>
	</tr>
<?php
}
?>
</table>

<!-- Ventana modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div class="modal-body"></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button id="btn_modal_ok" type="button" class="btn btn-primary">OK</button>
        <button id="btn_modal_final" type="button" class="btn btn-primary">OK</button>
      </div>
    </div>
  </div>
</div>