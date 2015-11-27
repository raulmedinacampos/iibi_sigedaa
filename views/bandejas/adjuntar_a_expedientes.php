<p>Expediente Núm: IIBI - SAD -[D] Clave (#Exp) - año</p>

<table class="table table-striped table-condensed">
	<tr>
		<th>Núm.</th>
		<th>Folio</th>
		<th>No. Oficio</th>
		<th>Asunto</th>
		<th>Fecha recepción</th>
		<th>Ubicación del doc</th>
	</tr>
	<tr>
		<td>1</td>
		<td><a href="#">E/SAD/017/2014</a></td>
		<td>IIBI/BIB/076/2014</td>
		<td>Acceso</td>
		<td>7-Mayo-2014</td>
		<td>Librero</td>
	</tr>
	<tr>
		<td>2</td>
		<td><a href="#">E/SAD/240/2014</a></td>
		<td>IIBI/SADM/240/2014</td>
		<td>Respuesta oficio</td>
		<td>8-Mayo-2014</td>
		<td>Estante/caja</td>
	</tr>
	<tr>
		<td>3</td>
		<td><a href="#">E/SAD/284/2014</a></td>
		<td>IIBI/BIB/080/2014</td>
		<td>Respuesta oficio</td>
		<td>13-Mayo-2014</td>
		<td>Por asignar</td>
	</tr>
</table>

<div class="text-right">
<?php
$attr = array(
		'id'		=> 'btn_regresar',
		'name'		=> 'btn_regresar',
		'class'		=> 'btn btn-default',
		'content'	=> 'Regresar'
);
echo form_button($attr);

$attr = array(
		'id'		=> 'btn_integrar',
		'name'		=> 'btn_integrar',
		'class'		=> 'btn btn-primary',
		'content'	=> 'Integrar'
);
echo form_button($attr);
?>
</div>

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
        <button type="button" class="btn btn-primary">OK</button>
      </div>
    </div>
  </div>
</div>