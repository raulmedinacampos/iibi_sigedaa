<form method="post" id="formFolioSalida" name="formFolioSalida" class="form-horizontal" action="">
	<div class="panel panel-primary">
		<div class="panel-heading">Integración de documentos al expediente</div>
		<div class="panel-body">
			<div class="form-group">
				<label class="col-sm-2 control-label">Expediente</label>
				<div class="col-sm-4">
					<input id="expediente" name="expediente" class="form-control" readonly="readonly" value="IIBI - SADM - [D] Clave 12345 - 2015" />
				</div>
				
				<label class="col-sm-2 control-label">Apertura</label>
				<div class="col-sm-4">
					<input id="apertura" name="apertura" class="form-control" readonly="readonly" value="dd/mm/aaaa" />
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-2 control-label">Nombre del servicio</label>
				<div class="col-sm-4">
					<input id="apertura" name="apertura" class="form-control" readonly="readonly" value="Nombre del servicio del expediente" />
				</div>
			</div>
		</div> <!-- .panel-body -->
	</div> <!-- Fin Integración de documentos -->

	<div class="panel panel-primary">
		<div class="panel-heading">Documento</div>
		<div class="panel-body">
			<div class="form-group">
				<label class="col-sm-3 control-label">Consecutivo en el expediente</label>
				<div class="col-sm-1">
					<input id="suscribe" name="suscribe" class="form-control" />
				</div>
				
				<label class="col-sm-2 col-sm-offset-2 control-label">Fecha de ingreso</label>
				<div class="col-sm-4">
					<input id="cargo_remitente" name="cargo_remitente" class="form-control" />
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-2 control-label">Tipo de documento</label>
				<div class="col-sm-4">
					<select id="tipo_documento" name="tipo_documento" class="form-control">
						<option value="">Seleccione</option>
					</select>
				</div>
				
				<label class="col-sm-2 control-label">Nombre del documento</label>
				<div class="col-sm-4">
					<select id="tipo_documento" name="tipo_documento" class="form-control">
						<option value="">Seleccione</option>
					</select>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-2 control-label">Si no existe, agréguelo</label>
				<div class="col-sm-3">
					<input id="asunto" name="asunto" class="form-control" />
				</div>
				<div class="col-sm-1">
					<button id="btn_agregar" name="btn_agregar" class="btn btn-primary btn-xs">Agregar</button>
				</div>
				
				<label class="col-sm-2 control-label">Asunto</label>
				<div class="col-sm-4">
					<input id="asunto" name="asunto" class="form-control" />
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-2 control-label">Información relevante</label>
				<div class="col-sm-10">
					<textarea rows="3" id="informacion_relevante" name="informacion_relevante" class="form-control"></textarea>
				</div>
			</div>
			
			<div class="form-group">
				<div class="col-sm-4">
				<label>Anexos</label>
				<button id="btn_anexos" name="btn_anexos" class="btn btn-primary btn-xs">Agregar anexos</button>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-2 control-label">Archivo adjunto</label>
				<div class="col-sm-4">
					<input type="file" id="anexo" name="anexo" class="filestyle" data-buttonText="Adjuntar" />
				</div>
			</div>
			
			<div class="form-group">
				<div class="checkbox col-sm-6">
					<label><input type="checkbox" id="chk_otra_institucion" name="chk_otra_institucion" value="1" checked="checked" /> Misma ubicación física que el expediente</label>
				</div>
				
				<label class="col-sm-2 control-label">Núm. de hojas<br />(contando los anexos)</label>
				<div class="col-sm-1">
					<input id="num_hojas" name="num_hojas" class="form-control" />
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-2 control-label">Nueva ubicación del documento</label>
				<div class="col-sm-4">
					<input id="asunto" name="asunto" class="form-control" />
				</div>
				
				<div class="checkbox col-sm-6">
					<label><input type="checkbox" id="chk_otra_institucion" name="chk_otra_institucion" value="1" /> Documento privado</label>
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
					<input id="tramite" name="tramite" class="form-control" readonly="readonly" value="Nombre del trámite" />
				</div>
			</div>
				
			<div class="form-group">
				<label class="col-sm-5 control-label">¿A qué etapa del trámite pertenece el documento?</label>
				<div class="col-sm-4">
					<select id="etapa" name="etapa" class="form-control">
						<option value="">Seleccione</option>
					</select>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-12">Seleccione las acciones realizadas para dar como concluida la etapa del proceso.</label>
			</div>
			<div class="col-sm-12">
				<div class="checkbox">
					<input type="checkbox" id="accion1" name="accion1" />
					<label>Verificador 1</label>
				</div>
			</div>
			
			<div class="col-sm-12">
				<div class="checkbox">
					<input type="checkbox" id="accion2" name="accion2" />
					<label>Verificador 2</label>
				</div>
			</div>
			
			<div class="col-sm-12">
				<div class="checkbox">
					<input type="checkbox" id="accion3" name="accion3" />
					<label>Verificador 3</label>
				</div>
			</div>
		</div> <!-- .panel-body -->
	</div> <!-- Fin Trámite -->

	<div class="row text-right">
		<div class="col-sm-12">
			<button id="btn_cancelar" name="btn_cancelar" class="btn btn-default">Cancelar</button>
			<button id="btn_ingreso" name="btn_ingreso" class="btn btn-primary">Ingreso</button>
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