<form method="post" enctype="multipart/form-data" id="formFolioSalida" name="formFolioSalida" class="form-horizontal" action="">
	<div class="panel panel-primary">
		<div class="panel-heading">Destinatario</div>
		<div class="panel-body">
			<div class="form-group">
				<label class="col-sm-2 control-label">Dirigido a</label>
				<div class="col-sm-4">
					<input id="dirigido_a" name="dirigido_a" class="form-control" />
				</div>
				
				<label class="col-sm-2 control-label">Cargo</label>
				<div class="col-sm-4">
					<input id="cargo" name="cargo" class="form-control" />
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-2 control-label">Dependencia UNAM</label>
				<div class="col-sm-4">
					<select id="tipo_documento" name="tipo_documento" class="form-control">
						<option value="">Seleccione</option>
					</select>
				</div>
				
				<div class="checkbox col-sm-2 control-label">
					<label><input type="checkbox" id="chk_otra_institucion" name="chk_otra_institucion" value="1" /> Otra institución</label>
				</div>
				<div class="col-sm-4">
					<input id="otra_institucion" name="otra_institucion" disabled="disabled" class="form-control" />
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-2 control-label">Entidad subordinada emisora</label>
				<div class="col-sm-4">
					<input id="entidad_subordinada" name="entidad_subordinada" class="form-control" />
				</div>
			</div>
		</div> <!-- .panel-body -->
	</div> <!-- Fin Destinatario -->

	<div class="panel panel-primary">
		<div class="panel-heading">Quien suscribe</div>
		<div class="panel-body">
			<div class="form-group">
				<label class="col-sm-2 control-label">Dirigido a</label>
				<div class="col-sm-4">
					<input id="suscribe" name="suscribe" class="form-control" />
				</div>
				
				<label class="col-sm-2 control-label">Cargo</label>
				<div class="col-sm-4">
					<input id="cargo_remitente" name="cargo_remitente" class="form-control" />
				</div>
			</div>
		</div> <!-- .panel-body -->
	</div> <!-- Fin Remitente -->

	<div class="panel panel-primary">
		<div class="panel-heading">Documento</div>
		<div class="panel-body">
			<div class="form-group">
				<label class="col-sm-2 control-label">Asunto</label>
				<div class="col-sm-4">
					<input id="asunto" name="asunto" class="form-control" />
				</div>
				
				<label class="col-sm-2 control-label">Tipo de documento</label>
				<div class="col-sm-4">
					<select id="tipo_documento" name="tipo_documento" class="form-control">
						<option value="">Seleccione</option>
					</select>
				</div>
			</div>
			
			<div class="form-group">
				<div class="col-sm-4">
				<label>Anexos <span class="glyphicon glyphicon-question-sign"></span></label>
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
				<label class="col-sm-2 control-label">Información relevante</label>
				<div class="col-sm-10">
					<textarea rows="3" id="informacion_relevante" name="informacion_relevante" class="form-control"></textarea>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-2 control-label">Número de hojas</label>
				<div class="col-sm-1">
					<input id="num_hojas" name="num_hojas" class="form-control" />
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-2 control-label">Para atender por</label>
				<div class="col-sm-4">
					<select id="tipo_documento" name="tipo_documento" class="form-control">
						<option value="">Seleccione</option>
					</select>
				</div>
			</div>
		</div> <!-- .panel-body -->
	</div> <!-- Fin Documento -->

	<div class="row text-right">
		<div class="col-sm-12">
			<button id="btn_cancelar" name="btn_cancelar" class="btn btn-default">Cancelar</button>
			<button id="btn_generar" name="btn_generar" class="btn btn-primary">Generar número de oficio</button>
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