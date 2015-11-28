<form method="post" id="formFolioSalida" name="formFolioSalida" class="form-horizontal" action="">
	<div class="panel panel-primary">
		<div class="panel-heading">Integración de documentos al expediente</div>
		<div class="panel-body">
			<div class="form-group">
				<label class="col-sm-2 control-label">Expediente</label>
				<div class="col-sm-4">
					<input id="expediente" name="expediente" class="form-control" />
				</div>
				
				<label class="col-sm-2 control-label">Apertura</label>
				<div class="col-sm-4">
					<input id="apertura" name="apertura" class="form-control" />
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-2 control-label">Nombre del servicio</label>
				<div class="col-sm-4">
				</div>
			</div>
		</div> <!-- .panel-body -->
	</div> <!-- Fin Integración de documentos -->

	<div class="panel panel-primary">
		<div class="panel-heading">Documento</div>
		<div class="panel-body">
			<div class="form-group">
				<label class="col-sm-2 control-label">Quien suscribe</label>
				<div class="col-sm-4">
					<input id="suscribe" name="suscribe" class="form-control" />
				</div>
				
				<label class="col-sm-2 control-label">Cargo</label>
				<div class="col-sm-4">
					<input id="cargo_remitente" name="cargo_remitente" class="form-control" />
				</div>
			</div>
		</div> <!-- .panel-body -->
	</div> <!-- Fin Documento -->

	<div class="panel panel-primary">
		<div class="panel-heading">Trámite o servicio</div>
		<div class="panel-body">
			<div class="form-group">
				<label class="col-sm-2 control-label">Trámite</label>
				<div class="col-sm-4">
					<input id="tramite" name="tramite" class="form-control" />
				</div>
				
				<label class="col-sm-2 control-label">¿A qué etapa del trámite pertenece el documento?</label>
				<div class="col-sm-4">
					<select id="etapa" name="etapa" class="form-control">
						<option value="">Seleccione</option>
					</select>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-2 control-label">Número de hojas</label>
				<div class="col-sm-1">
					<input id="num_hojas" name="num_hojas" class="form-control" />
				</div>
			</div>
		</div> <!-- .panel-body -->
	</div> <!-- Fin Trámite -->

	<div class="row text-right">
		<div class="col-sm-12">
			<button id="btn_cancelar" name="btn_cancelar" class="btn btn-default">Cancelar</button>
			<button id="btn_generar" name="btn_generar" class="btn btn-primary">Ingreso</button>
		</div>
	</div>
</form>

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