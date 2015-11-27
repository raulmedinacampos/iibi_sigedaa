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
		<td><a href="<?php echo base_url('bandejas/contenido-expediente'); ?>">IIBI - SAD - [D] Clave (12345) 2015</a></td>
		<td>Solicitud 1</td>
		<td>Fecha y hora</td>
		<td>Librero</td>
		<td><?php echo form_dropdown('dd_accion', $opt, '', 'id="dd_accion" class="form-control"')?></td>
	</tr>
	<tr>
		<td>2</td>
		<td><a href="<?php echo base_url('bandejas/contenido-expediente'); ?>">IIBI - SAD - [D] Clave (12345) 2015</a></td>
		<td>Solicitud 2</td>
		<td>Fecha y hora</td>
		<td>Estante/caja</td>
		<td><?php echo form_dropdown('dd_accion', $opt, '', 'id="dd_accion" class="form-control"')?></td>
	</tr>
	<tr>
		<td>3</td>
		<td><a href="<?php echo base_url('bandejas/contenido-expediente'); ?>">IIBI - SAD - [D] Clave (12345) 2015</a></td>
		<td>Solicitud 3</td>
		<td>Fecha y hora</td>
		<td>Por asignar</td>
		<td><?php echo form_dropdown('dd_accion', $opt, '', 'id="dd_accion" class="form-control"')?></td>
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
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button id="btn_modal_ok" type="button" class="btn btn-primary">OK</button>
        <button id="btn_modal_final" type="button" class="btn btn-primary">OK</button>
      </div>
    </div>
  </div>
</div>