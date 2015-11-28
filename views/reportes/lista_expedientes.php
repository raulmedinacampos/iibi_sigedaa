<h4>Expedientes en trámite</h4>
<p>Visualice el contenido haciendo clic en su número de expediente.</p>

<?php
$opt = array(
		'' => 'Seleccione',
		'1' => 'Ver estado',
		'2' => 'Modificar expediente',
		'3' => 'Modificar estado del expediente',
		'4' => 'Cancelar expediente'
);
?>
<table class="table table-striped table-condensed">
	<tr>
		<th>Núm.</th>
		<th>Número de expediente</th>
		<th>Descripción / Nombre del trabajador</th>
		<th>Fecha y hora</th>
		<th>Ubicación</th>
		<th>Acción</th>
	</tr>
	<tr>
		<td>1</td>
		<td><a href="../bandejas/contenido-expediente">IIBI - SAD - [D] Clave (12345) 2015</a></td>
		<td>Solicitud 1</td>
		<td>Fecha y hora</td>
		<td>Librero</td>
		<td>
			<select id="dd_accion" name="dd_accion" class="form-control">
				<option value="">Seleccione</option>
				<option value="1">Ver estado</option>
				<option value="2">Modificar expediente</option>
				<option value="3">Modificar estado del expediente</option>
				<option value="4">Cancelar expediente</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>2</td>
		<td><a href="../bandejas/contenido-expediente">IIBI - SAD - [D] Clave (12345) 2015</a></td>
		<td>Solicitud 2</td>
		<td>Fecha y hora</td>
		<td>Estante/caja</td>
		<td>
			<select id="dd_accion" name="dd_accion" class="form-control">
				<option value="">Seleccione</option>
				<option value="1">Ver estado</option>
				<option value="2">Modificar expediente</option>
				<option value="3">Modificar estado del expediente</option>
				<option value="4">Cancelar expediente</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>3</td>
		<td><a href="../bandejas/contenido-expediente">IIBI - SAD - [D] Clave (12345) 2015</a></td>
		<td>Solicitud 3</td>
		<td>Fecha y hora</td>
		<td>Por asignar</td>
		<td>
			<select id="dd_accion" name="dd_accion" class="form-control">
				<option value="">Seleccione</option>
				<option value="1">Ver estado</option>
				<option value="2">Modificar expediente</option>
				<option value="3">Modificar estado del expediente</option>
				<option value="4">Cancelar expediente</option>
			</select>
		</td>
	</tr>
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
        <button id="btn_modal_terminar" type="button" class="btn btn-primary">Cancelar o terminar trámite</button>
        <button id="btn_modal_actualizar" type="button" class="btn btn-primary">Actualizar</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
    </div>
  </div>
</div>